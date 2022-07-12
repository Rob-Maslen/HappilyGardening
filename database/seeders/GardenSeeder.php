<?php

namespace Database\Seeders;

use App\Models\Garden;
use Illuminate\Database\Seeder;

class GardenSeeder extends Seeder
{
    private $gardens = [];
    private $data = [];

    /**
     * @return void
     */
    public function run()
    {
        $gardens = [
            ['Butchart Gardens', '', 'Canada', '48.56538190', '-123.4698624', '1500', 'Butchart_Gardens', 'https://www.butchartgardens.com'],
            ['San Grato Park', '', 'Switzerland', '45.95145160', '8.930486', '5000', 'San_Grato_Park', 'https://parcosangrato.ch'],
            ['Brooklyn Botanic Gardens', '', 'USA', '40.66955500', '-73.96328800', '9000', 'Brooklyn_Botanic_Gardens', 'https://www.bbg.org'],
            ['Jardin Majorelle', '', 'Morocco', '31.64123110', '-8.003', '1000', 'Jardin_Majorelle', 'https://www.jardinmajorelle.com'],
            ['Kenrokuen', '', 'Japan', '36.563', '136.662', '1500', 'Kenrokuen', 'http://www.pref.ishikawa.jp/siro-niwa/kenrokuen'],
            ['Korakuen', '', 'Japan', '34.6677', '133.9357', '2000', 'Korakuen', 'https://okayama-korakuen.jp'],
            ['Villa d\'Este', '', 'Italy', '41.9633123', '12.7965', '1000', 'Villa_dEste', 'https://www.villadeste.com'],
            ['Hunte\'s Garden', '', 'Barbados', '13.1934', '-59.5508', '400', 'Huntes_Garden', 'https://www.huntesgardens-barbados.com'],
            ['Kairakuen', '', 'Japan', '36.37287550', '140.45', '3000', 'Kairakuen', 'https://www.city.mito.lg.jp/bloom-mito/tw/spot_a3.html'],
            ['Humble Administrator\'s Garden', '', 'China', '31.32422860', '120.6295', '750', 'Humble_Administrators_Garden', 'https://www.chinadiscovery.com/jiangsu/suzhou/humble-administrators-garden.html'],
            ['Summer Palace', '', 'China', '39.9938', '116.27', '4000', 'Summer_Palace', 'http://www.summerpalace-china.com/index_mobile.htm'],
            ['Claude Monet\'s Garden', '', 'France', '49.07508320', '1.53351', '500', 'Claude_Monets_Garden', 'http://giverny.org/gardens/fcm/visitgb.htm'],
            ['Desert Botanical Garden', '', 'USA', '33.461', '-111.943', '1500', 'Desert_Botanical_Garden', 'https://dbg.org'],
            ['Gardens of Chateau de Villandry', '', 'France', '47.33985700', '0.5145', '1500', 'Gardens_of_Chateau_de_Villandry', 'https://www.chateauvillandry.fr'],
            ['Gardens of Versailles', '', 'France', '48.805', '2.11', '5500', 'Gardens_of_Versailles', 'http://www.chateauversailles.fr/decouvrir/domaine/jardins'],
            ['Giardini Botanici Villa Taranto', '', 'Italy', '45.925', '8.5655', '1500', 'Giardini_Botanici_Villa_Taranto', 'https://www.villataranto.it'],
            ['Keukenhof', '', 'Netherlands', '52.267', '4.54475', '4250', 'Keukenhof', 'https://keukenhof.nl'],
            ['Longwood Gardens', 'Pennsylvania', 'USA', '39.8725', '-75.6768', '1500', 'Longwood_Gardens', 'https://longwoodgardens.org'],
            ['Nong Nooch Tropical Botanical Garden', '', 'Thailand', '12.766', '100.9327', '1350', 'Nong_Nooch_Tropical_Botanical_Garden', 'http://www.nongnoochtropicalgarden.com'],
            ['Royal Botanic Gardens, Kew', '', 'UK', '51.47874380', '-0.291', '2000', 'Royal_Botanic_Gardens_Kew', 'https://www.kew.org'],
            ['Volksgarten', '', 'Austria', '48.2079', '16.3625', '1650', 'Volksgarten', 'http://www.visitingvienna.com/sights/winter-palace/volksgarten'],
            ['Taj Mahal', '', 'India', '27.1765', '78.0426', '2500', 'Taj_Mahal', 'https://www.tajmahal.gov.in'],
            ['Kirstenbosch National Botanical Garden', '', 'South Africa', '-33.989', '18.4305333', '2000', 'Kirstenbosch_National_Botanical_Garden', 'https://www.sanbi.org/gardens/kirstenbosch'],
            ['Las Pozas', '', 'Mexico', '21.39673980', '-98.996', '2000', 'Las_Pozas', 'https://www.laspozasxilitla.org.mx'],
            ['Stone Henge', '', 'UK', '51.17888', '-1.82625', '100', 'Stonehenge', 'https://www.english-heritage.org.uk/visit/places/stonehenge/?utm_source=Google%20Business&utm_campaign=Local%20Listings&utm_medium=Google%20Business%20Prof'],
        ];

        for ($i=0; $i < count($gardens); $i++) {
            $data[] = [
                'name' => $gardens[$i][0],
                'address' => $gardens[$i][2],
                'latitude' => $gardens[$i][3],
                'longitude' => $gardens[$i][4],
                'zoom' => $gardens[$i][5],
                'image_folder' => $gardens[$i][6],
                'link' => $gardens[$i][7],
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ];    
        }

        Garden::insert($data);
    }
}
