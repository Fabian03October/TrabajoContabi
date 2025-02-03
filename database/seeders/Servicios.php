<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class Servicios extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('servicios')->insert([
            'clave' => '50151604',
            'nombre' => 'Aceites animal comestibles (Animales marinos, Hígado de bacalao)',
            'categoriaservicio_id' => 1,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50151605',
            'nombre' => 'Grasa saturada animal comestibles (Manteca, Sebo)',
            'categoriaservicio_id' => 1,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50151500',
            'nombre' => 'Leche de almendra, Leche de arroz, Leche de cáñamo , Leche de coco, Leche de nuez',
            'categoriaservicio_id' => 2,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50151513',
            'nombre' => 'Aceite de ajonjolí, Aceite de canola (colza), Aceite de cártamo, Aceite de coco, Aceite de girasol, Aceite de linaza, Aceite de maíz, Aceite de olivo (oliva), Aceite de soya, Aceites vegetales o de planta comestibles, Margarina',
            'categoriaservicio_id' => 2,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50151514',
            'nombre' => 'Grasas saturadas de vegetales o plantas comestibles',
            'categoriaservicio_id' => 2,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50151515',
            'nombre' => 'Leche de soya',
            'categoriaservicio_id' => 2,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50192601',
            'nombre' => 'Papas preparadas frescas o arroz o pasta o relleno',
            'categoriaservicio_id' => 3,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50192602',
            'nombre' => 'Papas preparadas y congeladas o arroz o pasta o relleno',
            'categoriaservicio_id' => 3,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50192603',
            'nombre' => 'Papas preparadas de repisa o arroz o pasta o relleno',
            'categoriaservicio_id' => 3,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50193100',
            'nombre' => 'Arcones navideños, Despensas básicas',
            'categoriaservicio_id' => 4,
        ]);


        DB::table('servicios')->insert([
            'clave' => '50193101',
            'nombre' => 'Mezcla de botanas instantáneas, Pastas para elaborar botanas',
            'categoriaservicio_id' => 4,
        ]);


        DB::table('servicios')->insert([
            'clave' => '50193102',
            'nombre' => 'Ingredientes preparados para postres, Mezcla de postres',
            'categoriaservicio_id' => 4,
        ]);


        DB::table('servicios')->insert([
            'clave' => '50193103',
            'nombre' => 'Ingredientes preparados para salsas, Mezcla de salsa',
            'categoriaservicio_id' => 4,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50193104',
            'nombre' => 'Base para sopas, Caldillo de tomate, Caldo de camarón, Caldo de pollo, Caldo de res, Consomé de pollo, Cremas, Puré de tomate, Sazonadores',
            'categoriaservicio_id' => 4,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50193105',
            'nombre' => 'Empanizadores, Mezcla para rebosar o de pan, Pan molido',
            'categoriaservicio_id' => 4,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50193106',
            'nombre' => 'Puré instantáneo',
            'categoriaservicio_id' => 4,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50193107',
            'nombre' => 'Puré de papa instantáneo',
            'categoriaservicio_id' => 4,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50193108',
            'nombre' => 'Puré preparado de varios vegetales',
            'categoriaservicio_id' => 4,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50202200',
            'nombre' => 'Aguamiel, Pulque, Rompope',
            'categoriaservicio_id' => 5,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50202201',
            'nombre' => ' Cerveza',
            'categoriaservicio_id' => 5,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50202202',
            'nombre' => 'Cidra, Sidra',
            'categoriaservicio_id' => 5,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50202203',
            'nombre' => 'Vino, Vino blanco, Vino rosado, Vino tinto',
            'categoriaservicio_id' => 5,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50202204',
            'nombre' => 'Jerez, Vino fortificado, Vino generoso',
            'categoriaservicio_id' => 5,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50202205',
            'nombre' => 'Vino blanco, Vino espumoso, Vino rosado',
            'categoriaservicio_id' => 5,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50202206',
            'nombre' => 'Aguardiente o charanda, Anís, Brandy, Cognac, Coñac, Crema de whisky, Ginebra, Licor de amaretto, Licor de ciruela, Licor de cocuy, Licor de crema, Licor de melón, Licor destilado, Mezcal, Tequila, Vodka, Whiskey',
            'categoriaservicio_id' => 5,
        ]);


        DB::table('servicios')->insert([
            'clave' => '50202207',
            'nombre' => 'Cocteles de alcohol o bebidas mixtas',
            'categoriaservicio_id' => 5,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50202301 ',
            'nombre' => ' Agua (Agua embotellada, Agua potable, Agua purificada)',
            'categoriaservicio_id' => 6,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50202302',
            'nombre' => 'Hielo',
            'categoriaservicio_id' => 6,
        ]);

        DB::table('servicios')->insert([
            'clave' => '50202303',
            'nombre' => 'Jugos congelados',
            'categoriaservicio_id' => 6,
        ]);

        DB::table('servicios')->insert([
            ['clave' => '50202305', 'nombre' => 'Jugo fresco (Zumo de frutas)', 'categoriaservicio_id' => 6],
            ['clave' => '50202306', 'nombre' => 'Refrescos', 'categoriaservicio_id' => 6],
            ['clave' => '50202307', 'nombre' => 'Bebida de chocolate o malta u otros', 'categoriaservicio_id' => 6],
            ['clave' => '50202308', 'nombre' => 'Cocteles libre de alcohol o mezcla de bebidas', 'categoriaservicio_id' => 6],
            ['clave' => '50202309', 'nombre' => 'Bebidas deportivas o de energía', 'categoriaservicio_id' => 6],
            ['clave' => '50202310', 'nombre' => 'Agua mineral', 'categoriaservicio_id' => 6],
            ['clave' => '50202311', 'nombre' => 'Bebida mixta de polvo (Concentrados y jarabes para preparar bebidas saborizadas, Polvo de sabores para preparar aguas)', 'categoriaservicio_id' => 6],
        ]);

        DB::table('servicios')->insert([
            ['clave' => '50201706', 'nombre' => 'Café (Café molido)', 'categoriaservicio_id' => 7],
            ['clave' => '50201707', 'nombre' => 'Sustituto de café', 'categoriaservicio_id' => 7],
            ['clave' => '50201708', 'nombre' => 'Bebida de café', 'categoriaservicio_id' => 7],
            ['clave' => '50201709', 'nombre' => 'Café instantáneo (Café soluble)', 'categoriaservicio_id' => 7],
            ['clave' => '50201710', 'nombre' => 'Té de hoja', 'categoriaservicio_id' => 7],
            ['clave' => '50201711', 'nombre' => 'Té instantáneo', 'categoriaservicio_id' => 7],
            ['clave' => '50201712', 'nombre' => 'Bebidas de té', 'categoriaservicio_id' => 7],
            ['clave' => '50201713', 'nombre' => 'Bolsas de té (Sobres de té)', 'categoriaservicio_id' => 7],
            ['clave' => '50201714', 'nombre' => 'Cremas no lácteas', 'categoriaservicio_id' => 7],
            ['clave' => '50201715', 'nombre' => 'Té de frutas', 'categoriaservicio_id' => 7],
        ]);

        DB::table('servicios')->insert([
            ['clave' => '50161509', 'nombre' => 'Azúcares naturales o productos endulzantes (Azúcar moscabada o morena, Inulina de maguey o agave, Piloncillo)', 'categoriaservicio_id' => 8],
            ['clave' => '50161510', 'nombre' => 'Endulzantes artificiales (Azúcar refinada, Edulcorantes artificiales, Sustitutos de azúcar)', 'categoriaservicio_id' => 8],
            ['clave' => '50161511', 'nombre' => 'Chocolate o sustituto de chocolate', 'categoriaservicio_id' => 8],
            ['clave' => '50161512', 'nombre' => 'Almíbar (Jarabe)', 'categoriaservicio_id' => 8],
        ]);

        DB::table('servicios')->insert([
            ['clave' => '50161800', 'nombre' => 'Dulces de confite', 'categoriaservicio_id' => 9],
            ['clave' => '50161813', 'nombre' => 'Chocolate o sustituto de chocolate, confite', 'categoriaservicio_id' => 9],
            ['clave' => '50161814', 'nombre' => 'Azúcar o sustituto de azúcar, confite, Gomitas', 'categoriaservicio_id' => 9],
            ['clave' => '50161815', 'nombre' => 'Goma de mascar', 'categoriaservicio_id' => 9],
        ]);

        DB::table('servicios')->insert([
            ['clave' => '50161800', 'nombre' => 'Dulces de confite', 'categoriaservicio_id' => 10],
            ['clave' => '50161813', 'nombre' => 'Chocolate o sustituto de chocolate, confite', 'categoriaservicio_id' => 10],
            ['clave' => '50161814', 'nombre' => 'Azúcar o sustituto de azúcar, confite, Gomitas', 'categoriaservicio_id' => 10],
            ['clave' => '50161815', 'nombre' => 'Goma de mascar', 'categoriaservicio_id' => 10],
        ]);


        DB::table('servicios')->insert([
            ['clave' => '50171548', 'nombre' => 'Hierbas frescas', 'categoriaservicio_id' => 11],
            ['clave' => '50171550', 'nombre' => 'Especias o extractos (Ajo molido, Anís, Azafrán, Canela, Cebolla molida, Clavo de olor, Comino, Curry, Cúrcuma, Especias o extractos, Hierbas de olor, Hoja santa, Pimienta, Romero, Tomillo, Vainilla, Hojas de aguacate)', 'categoriaservicio_id' => 11],
            ['clave' => '50171551', 'nombre' => 'Sal de mesa', 'categoriaservicio_id' => 11],
            ['clave' => '50171552', 'nombre' => 'Mezcla para adobar', 'categoriaservicio_id' => 11],
            ['clave' => '50171553', 'nombre' => 'Polvo de pimentón rojo (Chile piquín molido)', 'categoriaservicio_id' => 11],
            ['clave' => '50171554', 'nombre' => 'Tallo de hierbas y semillas para infusiones', 'categoriaservicio_id' => 11],
        ]);

        DB::table('servicios')->insert([
            ['clave' => '50172001', 'nombre' => 'Salsa soya', 'categoriaservicio_id' => 12],
            ['clave' => '50172002', 'nombre' => 'Pasta de pimientos picantes basada en soya', 'categoriaservicio_id' => 12],
            ['clave' => '50172003', 'nombre' => 'Pasta de frijol de soya', 'categoriaservicio_id' => 12],
            ['clave' => '50172004', 'nombre' => 'Pasta mixta basada en soya', 'categoriaservicio_id' => 12],
            ['clave' => '50172005', 'nombre' => 'Mejoo o frijol de soya fermentado', 'categoriaservicio_id' => 12],
            ['clave' => '50172006', 'nombre' => 'Queso de soya', 'categoriaservicio_id' => 12],
        ]);

        DB::table('servicios')->insert([
            ['clave' => '50347201', 'nombre' => 'Aceitunas agrinion congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347202', 'nombre' => 'Aceitunas alepo congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347203', 'nombre' => 'Aceitunas alfonso congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347204', 'nombre' => 'Aceitunas anfisa congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347205', 'nombre' => 'Aceitunas arauco congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347206', 'nombre' => 'Aceitunas arbequina congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347207', 'nombre' => 'Aceitunas atlanta congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347208', 'nombre' => 'Aceitunas cerignola congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347209', 'nombre' => 'Aceitunas cracked provencal congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347210', 'nombre' => 'Aceitunas empeltre congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347211', 'nombre' => 'Aceitunas gaeta congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347212', 'nombre' => 'Aceitunas hondoelia congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347213', 'nombre' => 'Aceitunas kalamata congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347214', 'nombre' => 'Aceitunas kura congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347215', 'nombre' => 'Aceitunas ligurian congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347216', 'nombre' => 'Aceitunas lucque congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347217', 'nombre' => 'Aceitunas lugano congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347218', 'nombre' => 'Aceitunas manzanilla congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347219', 'nombre' => 'Aceitunas marche congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347220', 'nombre' => 'Aceitunas misión congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347221', 'nombre' => 'Aceitunas nafplion verde congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347222', 'nombre' => 'Aceitunas nicoise congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347223', 'nombre' => 'Aceitunas nyons congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347224', 'nombre' => 'Aceitunas picholine congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347225', 'nombre' => 'Aceitunas ponentine congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347226', 'nombre' => 'Aceitunas royal congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347227', 'nombre' => 'Aceitunas seracena congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347228', 'nombre' => 'Aceitunas sevillano congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347229', 'nombre' => 'Aceitunas sicilian congeladas', 'categoriaservicio_id' => 13],
            ['clave' => '50347230', 'nombre' => 'Aceitunas toscanella congeladas', 'categoriaservicio_id' => 13],
        ]);

        DB::table('servicios')->insert([
            ['clave' => '50342201', 'nombre' => 'Agras bluecrop congeladas (Fruto azul del bosque bluecrop congelado)', 'categoriaservicio_id' => 14],
            ['clave' => '50342202', 'nombre' => 'Agras bluetta congeladas (Fruto azul del bosque bluetta congelado)', 'categoriaservicio_id' => 14],
            ['clave' => '50342203', 'nombre' => 'Agras brigitta congeladas (Fruto azul del bosque brigitta congelado)', 'categoriaservicio_id' => 14],
            ['clave' => '50342204', 'nombre' => 'Agras chandler congeladas (Fruto azul del bosque chandler congelado)', 'categoriaservicio_id' => 14],
            ['clave' => '50342205', 'nombre' => 'Agras duque congeladas (Fruto azul del bosque duque congelado)', 'categoriaservicio_id' => 14],
            ['clave' => '50342206', 'nombre' => 'Agras hardyblue congeladas (Fruto azul del bosque hardyblue congelado)', 'categoriaservicio_id' => 14],
            ['clave' => '50342207', 'nombre' => 'Agras legacy congeladas (Fruto azul del bosque legacy congelado)', 'categoriaservicio_id' => 14],
            ['clave' => '50342208', 'nombre' => 'Agras misti congeladas (Fruto azul del bosque misti congelado)', 'categoriaservicio_id' => 14],
            ['clave' => '50342209', 'nombre' => 'Agras nelson congeladas (Fruto azul del bosque nelson congelado)', 'categoriaservicio_id' => 14],
            ['clave' => '50342210', 'nombre' => 'Agras northblue congeladas (Fruto azul del bosque northblue congelado)', 'categoriaservicio_id' => 14],
            ['clave' => '50342211', 'nombre' => 'Agras northcountry congeladas (Fruto azul del bosque northcountry congelado)', 'categoriaservicio_id' => 14],
            ['clave' => '50342212', 'nombre' => 'Agras northsky congeladas (Fruto azul del bosque northsky congelado)', 'categoriaservicio_id' => 14],
            ['clave' => '50342213', 'nombre' => 'Agras patriot congeladas (Fruto azul del bosque patriot congelado)', 'categoriaservicio_id' => 14],
            ['clave' => '50342214', 'nombre' => 'Agras spartan congeladas (Fruto azul del bosque spartan congelado)', 'categoriaservicio_id' => 14],
            ['clave' => '50342215', 'nombre' => 'Agras toro congeladas (Fruto azul del bosque toro congelado)', 'categoriaservicio_id' => 14],
        ]);

        DB::table('servicios')->insert([
            ['clave' => '50341601', 'nombre' => 'Abaricoques ambercot congeladas (Chabacano ambercot congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341602', 'nombre' => 'Albaricoques apache congeladas (Chabacano apache congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341603', 'nombre' => 'Albaricoques brittany dorado congeladas (Chabacano brittany dorado congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341604', 'nombre' => 'Albaricoque negro congeladas (Chabacano negro congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341605', 'nombre' => 'Albaricoque blenheim congeladas (Chabacano blenheim congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341606', 'nombre' => 'Albaricoque bonny congeladas (Chabacano bonny congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341607', 'nombre' => 'Albaricoque biluda congeladas (Chabacano biluda congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341608', 'nombre' => 'Albaricoque castlebrite congeladas (Chabacano castlebrite congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341609', 'nombre' => 'Albaricoque clutha gold congeladas (Chabacano clutha gold congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341610', 'nombre' => 'Albaricoque clutha sun congeladas (Chabacano clutha sun congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341611', 'nombre' => 'Albaricoque derby royal congeladas (Chabacano derby royal congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341612', 'nombre' => 'Albaricoque dina congeladas (Chabacano dina congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341613', 'nombre' => 'Albaricoque earlicot congeladas (Chabacano earlicot congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341614', 'nombre' => 'Albaricoque earliman congeladas (Chabacano earliman congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341615', 'nombre' => 'Albaricoque early bright congeladas (Chabacano early bright congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341616', 'nombre' => 'Albaricoque flaming gold congeladas (Chabacano flaming gold congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341617', 'nombre' => 'Albaricoque frenso congeladas (Chabacano frenso congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341618', 'nombre' => 'Albaricoque gold bright congeladas (Chabacano gold bright congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341619', 'nombre' => 'Albaricoque goldbar congeladas (Chabacano goldbar congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341620', 'nombre' => 'Albaricoque dorado sweet congeladas (Chabacano dorado sweet congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341621', 'nombre' => 'Albaricoque goldrich congeladas (Chabacano goldrich congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341622', 'nombre' => 'Albaricoque helena congeladas (Chabacano helena congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341623', 'nombre' => 'Albaricoque honeycot congeladas (Chabacano congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341624', 'nombre' => 'Albaricoque imperial congeladas (Chabacano imperial congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341625', 'nombre' => 'Albaricoque jordanne congeladas (Chabacano jordanne congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341626', 'nombre' => 'Albaricoque jumbo cot congeladas (Chabacano jumbo cot congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341627', 'nombre' => 'Albaricoque kandy kot congeladas (Chabacano kandy kot congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341628', 'nombre' => 'Albaricoque katy congeladas (Chabacano katy congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341629', 'nombre' => 'Albaricoque rey congeladas (Chabacano rey congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341630', 'nombre' => 'Albaricoque lambertin congeladas (Chabacano lambertin congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341631', 'nombre' => 'Albaricoque loma congeladas (Chabacano loma congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341632', 'nombre' => 'Albaricoque lulu belle congeladas (Chabacano lulu belle congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341633', 'nombre' => 'Albaricoque modesto congeladas (Chabacano modesto congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341634', 'nombre' => 'Albaricoque moorpark congeladas (Chabacano moorpark congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341635', 'nombre' => 'Albaricoque naranja ojo congeladas (Chabacano naranja ojo congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341636', 'nombre' => 'Albaricoque palstein congeladas (Chabacano palstein congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341637', 'nombre' => 'Albaricoque patterson congeladas (Chabacano patterson congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341638', 'nombre' => 'Albaricoque perfection congeladas (Chabacano perfection congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341639', 'nombre' => 'Albaricoque poppy congeladas (Chabacano poppy congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341640', 'nombre' => 'Albaricoque poppycot congeladas (Chabacano poppy cot congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341641', 'nombre' => 'Albaricoque reina congeladas (Chabacano reina congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341642', 'nombre' => 'Albaricoque riland congeladas (Chabacano riland congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341643', 'nombre' => 'Albaricoque rival congeladas (Chabacano rival congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341644', 'nombre' => 'Albaricoque robada congeladas (Chabacano robada congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341645', 'nombre' => 'Albaricoque royal congeladas (Chabacano royal congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341646', 'nombre' => 'Albaricoque royal blenheim congeladas (Chabacano royal blenheim congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341647', 'nombre' => 'Albaricoque royal orange congeladas (Chabacano royal orange congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341648', 'nombre' => 'Albaricoque sundrop congeladas (Chabacano sundrop congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341649', 'nombre' => 'Albaricoque tilton congeladas (Chabacano tilton congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341650', 'nombre' => 'Albaricoque tomcot congeladas (Chabacano tomcot congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341651', 'nombre' => 'Albaricoque tracy congeladas (Chabacano tracy congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341652', 'nombre' => 'Albaricoque tri gem congeladas (Chabacano tri gem congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341653', 'nombre' => 'Albaricoque valley gold congeladas (Chabacano valley gold congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341654', 'nombre' => 'Albaricoque westley congeladas (Chabacano westley congelado)', 'categoriaservicio_id' => 15],
            ['clave' => '50341655', 'nombre' => 'Albaricoque york congeladas (Chabacano york congelado)', 'categoriaservicio_id' => 15],
        ]);

        DB::table('servicios')->insert([
            ['clave' => '50367201', 'nombre' => 'Aceitunas agrinion en lata o en frasco (Aceituna agrinion en lata o en frasco)', 'categoriaservicio_id' => 16],
            ['clave' => '50367202', 'nombre' => 'Aceitunas aleppo en lata o en frasco (Aceituna aleppo en lata o en frasco)', 'categoriaservicio_id' => 16],
            ['clave' => '50367203', 'nombre' => 'Aceitunas alfonso en lata o en frasco (Aceituna alfonso en lata o en frasco)', 'categoriaservicio_id' => 16],
            ['clave' => '50367204', 'nombre' => 'Aceitunas amfisa en lata o en frasco (Aceituna amfisa en lata o en frasco)', 'categoriaservicio_id' => 16],
            ['clave' => '50367205', 'nombre' => 'Aceitunas arauco en lata o en frasco (Aceituna arauco en lata o en frasco)', 'categoriaservicio_id' => 16],
            ['clave' => '50367206', 'nombre' => 'Aceitunas arbequina en lata o en frasco (Aceituna arbequina en lata o en frasco)', 'categoriaservicio_id' => 16],
            ['clave' => '50367207', 'nombre' => 'Aceitunas atlanta en lata o en frasco (Aceituna atlanta en lata o en frasco)', 'categoriaservicio_id' => 16],
            ['clave' => '50367208', 'nombre' => 'Aceitunas cerignola en lata o en frasco (Aceituna cerignola en lata o en frasco)', 'categoriaservicio_id' => 16],
            ['clave' => '50367209', 'nombre' => 'Aceitunas cracked provencal en lata o en frasco (Aceituna cracked provencal en lata o en frasco)', 'categoriaservicio_id' => 16],
            ['clave' => '50367210', 'nombre' => 'Aceitunas empeltre en lata o en frasco (Aceituna empeltre en lata o en frasco)', 'categoriaservicio_id' => 16],
            ['clave' => '50367211', 'nombre' => 'Aceitunas gaeta en lata o en frasco (Aceituna gaeta en lata o en frasco)', 'categoriaservicio_id' => 16],
            ['clave' => '50367212', 'nombre' => 'Aceitunas hondoelia en lata o en frasco (Aceituna hondoelia en lata o en frasco)', 'categoriaservicio_id' => 16],
            ['clave' => '50367213', 'nombre' => 'Aceitunas kalamata en lata o en frasco (Aceituna kalamata en lata o en frasco)', 'categoriaservicio_id' => 16],
            ['clave' => '50367214', 'nombre' => 'Aceitunas kura en lata o en frasco (Aceituna kura en lata o en frasco)', 'categoriaservicio_id' => 16],
            ['clave' => '50367215', 'nombre' => 'Aceitunas ligurian en lata o en frasco (Aceituna ligurian en lata o en frasco)', 'categoriaservicio_id' => 16],
            ['clave' => '50367216', 'nombre' => 'Aceitunas lucque en lata o en frasco (Aceituna lucque en lata o en frasco)', 'categoriaservicio_id' => 16],
            ['clave' => '50367217', 'nombre' => 'Aceitunas lugano en lata o en frasco (Aceituna lugano en lata o en frasco)', 'categoriaservicio_id' => 16],
            ['clave' => '50367218', 'nombre' => 'Aceitunas manzanilla en lata o en frasco (Aceituna manzanilla en lata o en frasco)', 'categoriaservicio_id' => 16],
            ['clave' => '50367219', 'nombre' => 'Aceitunas marche en lata o en frasco (Aceituna marche en lata o en frasco)', 'categoriaservicio_id' => 16],
            ['clave' => '50367220', 'nombre' => 'Aceitunas misión en lata o en frasco (Aceituna misión en lata o en frasco)', 'categoriaservicio_id' => 16],
            ['clave' => '50367221', 'nombre' => 'Aceitunas nafplion verde en lata o en frasco (Aceituna nafplion verde en lata o en frasco)', 'categoriaservicio_id' => 16],
            ['clave' => '50367222', 'nombre' => 'Aceitunas nicoise en lata o en frasco (Aceituna nicoise en lata o en frasco)', 'categoriaservicio_id' => 16],
        ]);

        DB::table('servicios')->insert([
            ['clave' => '50362201', 'nombre' => 'Agras bluecrop en lata o en frasco (Fruto azul del bosque bluecrop en lata o en frasco)', 'categoriaservicio_id' => 17],
            ['clave' => '50362202', 'nombre' => 'Agras bluetta en lata o en frasco (Fruto azul del bosque bluetta en lata o en frasco)', 'categoriaservicio_id' => 17],
            ['clave' => '50362203', 'nombre' => 'Agras brigitta en lata o en frasco (Fruto azul del bosque brigitta en lata o en frasco)', 'categoriaservicio_id' => 17],
            ['clave' => '50362204', 'nombre' => 'Agras chandler en lata o en frasco (Fruto azul del bosque chandler en lata o en frasco)', 'categoriaservicio_id' => 17],
            ['clave' => '50362205', 'nombre' => 'Agras duke en lata o en frasco (Fruto azul del bosque duke en lata o en frasco)', 'categoriaservicio_id' => 17],
            ['clave' => '50362206', 'nombre' => 'Agras hardyblue en lata o en frasco (Fruto azul del bosque hardyblue en lata o en frasco)', 'categoriaservicio_id' => 17],
            ['clave' => '50362207', 'nombre' => 'Agras legacy en lata o en frasco (Fruto azul del bosque legacy en lata o en frasco)', 'categoriaservicio_id' => 17],
            ['clave' => '50362208', 'nombre' => 'Agras misty en lata o en frasco (Fruto azul del bosque misty en lata o en frasco)', 'categoriaservicio_id' => 17],
            ['clave' => '50362209', 'nombre' => 'Agras nelson en lata o en frasco (Fruto azul del bosque nelson en lata o en frasco)', 'categoriaservicio_id' => 17],
            ['clave' => '50362210', 'nombre' => 'Agras northblue en lata o en frasco (Fruto azul del bosque northblue en lata o en frasco)', 'categoriaservicio_id' => 17],
            ['clave' => '50362211', 'nombre' => 'Agras northcountry en lata o en frasco (Fruto azul del bosque northcountry en lata o en frasco)', 'categoriaservicio_id' => 17],
            ['clave' => '50362212', 'nombre' => 'Agras northsky en lata o en frasco (Fruto azul del bosque northsky en lata o en frasco)', 'categoriaservicio_id' => 17],
        ]);
    }
}
