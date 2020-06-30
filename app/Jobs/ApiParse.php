<?php
namespace App\Jobs;

use Illuminate\Support\Facades\Storage;

use App\Models\APIParsing;

use App\Goods;
use App\Category;
use App\Price;
use App\Product;
use App\Models\Bonus;

class ApiParse {
    public static function parseFirst () {
        set_time_limit(0);
        $to_parse = APIParsing::where([
            ['finished', 0],
            ['in_proccess', 0]
        ])->first();
        if ($to_parse) {
            $xml_string = Storage::get('apis\\' . $to_parse->filename);

            $xml = simplexml_load_string($xml_string);
    
            $json = json_encode($xml);
    
            $array = json_decode($json,TRUE);

            switch ($to_parse->type) {
                case 'products':
                    self::parseProducts($array, $to_parse);
                break;
                case 'prices':
                    self::parsePrices($array, $to_parse);
                break;
                case 'ammounts':
                    self::parseAmmounts($array, $to_parse);
                break;
                case 'bonuses':
                    self::parseBonuses($array, $to_parse);
                break;
            }
        }
        dump('done');
    }
    
    private static function parseBonuses ($array, $parser) {
        $parser->in_proccess = 1;
        $parser->save();

        $count = count($array['item']) - 1;
        try {
        for (
            $i = $parser->on_item, $item = $array['item'][$i]; 
            $i < $count; 
            $i++, $item = $array['item'][$i], $parser->on_item++
        ) {
            dump($i);
            /*
            SHOP                    - ТK
            MATNR                   - Товар
            DESCRIPTION             - полное Наименование товара
            EANNR                   - все Штрих-кода
            PRICE                   - Цена, руб. (вкл. НДС)
            DISCOUNT                - Процент скидки
            DATAB                   - Старт действия промо-цены
            DATBI                   - Окончание действия промо-цены
            VRKME                   - Единица измерения продаж
            KSCHL                   - Вид БУ
            KSCHL_DESCRIPTION       - Полное наименование БУ
            MATNR_PR                - Товар-предпосылка (товар, который надо купить, чтобы получить скидку)
            MATNR_PR_DESCRIPTION    - Наименование товара-предпосылки
            EANNR_MATNR_PR          - Штрих-код товара-предпосылки
            KNRMAT                  - Бесплатный товар
            KNRMAT_DESCRIPTION      - Наименование бесплатного товара
            EANNR_KNRMAT            - ШК Бесплатного товара
            GRPGNR_PR               - Предпосылки группировки (в качестве предпосылки может выступать любой или все товары из группировки)
            MATQUAN                 - Количество предпосылок
            MATQUAN_PR              - Товаров в группировке
            CATEG                   - Мульти-комби (если мульти - то надо купить любой товар из группировки-предпосылки, комби - все товары из группировки )
            SUMFLAG                 - Индикатор суммирования (если заполнено, то можно суммировать товары предпосылки)
            BBYRQMAX                - Ограничение кол-ва до MAX
            BBYRQMIN                - Ограничение кол-во от  MIN
            KNRMM                   - Мin кол-во для получения беспл товара
            KNRNM                   - Объем натурального рабата на какое кол-во товара дается бесплатный товар
            KNRZM                   - Количество бесплатного товара
            BBYCUSCARD              - Оптовое ограничение - объем до
            BBYTEXT                 - Текст бонусной покупки
            */
            //TO BE CONTINUED
        }
        $parser->on_item++;
        $parser->finished = 1;
        $parser->save();
        } catch (\Exception $e) {
            $parser->in_proccess = 0;
            $parser->errors++;
            $parser->last_error = $e->getMessage();
            $parser->save();
        }
    }

    private static function parseAmmounts ($array, $parser) {
        $parser->in_proccess = 1;
        $parser->save();

        $count = count($array['item']) - 1;
        try {
        for (
            $i = $parser->on_item, $item = $array['item'][$i]; 
            $i < $count; 
            $i++, $item = $array['item'][$i], $parser->on_item++
        ) {
            dump($i);
            /*
            EANNR           - штрих-код
            MATKL           - категория товаров
            MATNR           - SAP номер товара 
            SHOP            - ТК
            DESCRIPTION     - полное наименование товара 
            MEINS           - единица измерения (КГ/ШТ)
            STOCK           - остаток
            ASSORT          - ассортимент 
            SCALES          - номер на весах
            */
            if (isset($item['EANNR'])) {
                $product = Product::findByCode($item['EANNR']);
                if (!$product) {
                    $product = new Price();
                } else {
                    $good = Goods::where('code', $item['EANNR'])->first();
                    if (!$good) {
                        continue;
                    }
                    $product->art       = $good->art;
                }

                $product->code          = $item['EANNR'] ?? 'undefined';
                
                $product->shop          = $item['SHOP'] ?? '';

                $price = Price::where('code', $item['EANNR'])->first();
                if (!$price) {
                    continue;
                }
                $product->price         =  $price->price;
                
                $product->ammount       = $item['STOCK'] ?? 0;
                $product->assort        = $item['ASSORT'] ?? 0;
                
                $product->save();
            }
            if ($parser->on_item % 50 == 0) {
                $parser->save();
            }
        }
        $parser->on_item++;
        $parser->finished = 1;
        $parser->save();
        } catch (\Exception $e) {
            $parser->in_proccess = 0;
            $parser->errors++;
            $parser->last_error = $e->getMessage();
            $parser->save();
        }
    }

    private static function parsePrices ($array, $parser) {
        $parser->in_proccess = 1;
        $parser->save();

        $count = count($array['item']) - 1;
        try {
        for (
            $i = $parser->on_item, $item = $array['item'][$i]; 
            $i < $count; 
            $i++, $item = $array['item'][$i], $parser->on_item++
        ) {
            dump($i);
            /*
            EANNR           все штрих-кода товара
            MATKL           подкатегория
            MATNR           SAP код товара
            SHOP            ТК
            DESCRIPTION     полное наименование товара
            MEINS           единица измерения
            PRICE           цена без ДК, руб. (вкл. НДС)
            VAT             НДС, %;
            PRICE_A         цена акционная  в руб
            DATAB           старт действия промо-цены
            DATBI           окончание действия промо-цены  
            */
            if (isset($item['EANNR'])) {
                $price = Price::findByCode($item['EANNR']);
                if (!$price) {
                    $price = new Price();
                } else {
                    $good = Goods::where('code', $item['EANNR'])->first();
                    if (!$good) {
                        continue;
                    }
                    $price->art       = $good->art;
                }

                $price->code          = $item['EANNR'] ?? 'undefined';
                
                $price->shop          = $item['SHOP'] ?? '';
                $price->price         = $item['PRICE'] ?? 0;
                $price->vat           = $item['VAT'] ?? 0;
                
                $price->save();
            }
            if ($parser->on_item % 50 == 0) {
                $parser->save();
            }
        }
        $parser->on_item++;
        $parser->finished = 1;
        $parser->save();
        } catch (\Exception $e) {
            $parser->in_proccess = 0;
            $parser->errors++;
            $parser->last_error = $e->getMessage();
            $parser->save();
        }
    }

    private static function parseProducts ($array, $parser) {
        $parser->in_proccess = 1;
        $parser->save();

        $count = count($array['item']) - 1;
        try {
        for (
            $i = $parser->on_item, $item = $array['item'][$i]; 
            $i < $count; 
            $i++, $item = $array['item'][$i], $parser->on_item++
        ) {
            dump($i);
            /*
            EANNR               - штрих-код                
            ZEXARTNM            - наименование              - goods.name
            ZEXVENBR            - поставщик/Бренд           - goods.brand
            ZEXARTDS            - подробное описание        - goods.description
            ZEXARTCD            - артикул                   - goods.art
            ZEXPACKG            - упаковка                  - goods.package
            WHERL               - страна                    - goods.country
            WGBEZ               - категория товаров         - goods.category_name / categpry_id
            BRGEW               - вес  
            GEWEI               - еи веса
            VOLUM               - объем 
            VOLEH               - еи объема
            INGRIDIENTS         - состав                    - goods.ingredients
            DESCRIPTION         - описание
            MEINS               - тип товара 
            LIFNR               - производитель             - goods.manufacturer
            NUTVAL              - пищевая ценность
            BREIT               - ширина в мм
            LAENG               - глубина в мм
            HOEHE               - высота в мм
            ZMD_REAL_TIME       - срок годности
            ZMD_REAL_PER        - срок годности
            MATNR               - SAP номер товара 
            MATKL               - подкатегория
            EAN11NEW            - новый штрих-код
            EAN11DEL            - удаленный штрих-код
            */
            if (isset($item['ZEXARTCD'])) {
                $product = Goods::findByArt($item['ZEXARTCD']);
                if (!$product) {
                    $product = new Goods();
                }
                $product->name          = $item['ZEXARTNM'] ?? 'undefined';
                $product->brand         = $item['ZEXVENBR'] ?? 'none';
                $product->description   = $item['ZEXARTDS'] ?? '';
                $product->art           = $item['ZEXARTCD'];
                $product->SAP_code      = $item['MATNR'] ?? '';
                $product->code          = $item['EANNR'] ?? '';
                $product->package       = $item['ZEXPACKG'] ?? 'none';
                $product->country       = $item['WHERL'] ?? '';
                
                
                $product->category_name = $item['WGBEZ'] ?? '';
                $cat = Category::where('name', $product->category_name)->first();
                if (!$cat) {
                    $cat = new Category();
                    $cat->name = $product->category_name;
                    $cat->save();
                }
                $product->category_id   = $cat->id;
                
                $product->ingredients   = $item['INGRIDIENTS'] ?? '';
                $product->manufacturer  = $item['LIFNR'] ?? 'none';
                $product->save();
            }
            if ($parser->on_item % 50 == 0) {
                $parser->save();
            }
        }
        $parser->on_item++;
        $parser->finished = 1;
        $parser->save();
        } catch (\Exception $e) {
            $parser->in_proccess = 0;
            $parser->errors++;
            $parser->last_error = $e->getMessage();
            $parser->save();
        }
    }
}