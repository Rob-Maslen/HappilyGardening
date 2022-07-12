<?php

namespace Database\Seeders;

use App\Models\FunFact;
use Illuminate\Database\Seeder;

class FunFactSeeder extends Seeder
{
    private $funFacts = [];
    private $data = [];

    /**
     * @return void
     */
    public function run()
    {
        $funFacts = [
            ['19', 'In 2018 the Dinosaur Valley exhibition area released life-size recreations of various dinosaurs amongst the tropical plants and stone formations.'],
            ['19', 'The gardens host religious ceremonies, martial arts demonstrations, massages, and elephant shows.'],
            ['19', 'Nong Nooch Tropical Botanical Garden covers 500 acres. Visitors can rent bicycles, pedalled swan boats or take a 30 minute tour on a sightseeing bus.'],
            ['4', 'Jacques Majorelle referred to the garden as “vast splendours whose harmony I have orchestrated… This garden is a momentous task, to which I give myself entirely. It will take my last years from me and I will fall, exhausted, under its branches, after having given it all my love.”'],
            ['18', 'Longwood Gardens has a four acre conservatory.'],
            ['1', 'Butchart gardens were developed by a businessman’s wife who decided to takeover a limestone quarry that her husband’s business no longer needed.'],
            ['22', 'During British rule in India the garden was landscaped to look more like the manicured lawns in England. The original garden was adorned with roses and daffodils.'],
            ['23', 'Established in 1913, it was the first botanic garden in the world devoted to indigenous flora, even though invasive species were not yet considered an ecological or environmental problem.'],
            ['8', 'Hunte’s Garden is in a sinkhole about 150 feet deep and 500 feet across which was formed by a massive landslip.'],
            ['3', 'The Fragrance Garden was the first in the US to be built for the visually impaired. Visitors are encouraged to touch and smell the plants.'],
            ['3', 'The land the Brooklyn Botanic Gardens were built on was an ash dump throughout the 1800s.'],
            ['24', 'Las Pozas was created by a British eccentric named Edward James who was described by Salvadore Dali as "crazier than all the Surrealists together".'],
            ['8', 'Hunte took over the site in 1997 and spent two years making a garden in the crater before he opened to the public.'],
            ['5', '"Kenrokuen" means "garden that combines six characteristics." These are spaciousness, seclusion, artifice, antiquity, water-courses and panoramas.'],
            ['5', '"Yukizuri" ropes are put in place from November to March to stop branches breaking under the weight of winter snowfalls.'],
            ['17', 'Keukenhof has a different theme each year, in 2020 it is a World of Colors.'],
            ['12', 'Monet was no fan of the sooty residue left on his lily pads each morning from passing trains. So he tasked a gardener with going out in a boat each day and polishing the lily pads before the day’s painting began.'],
            ['12', 'Monet painted his water lilies around 250 times.'],
            ['9', 'Kairakuen is famous for plum blossoms. With over 3,000 plum trees that bloom annually, turning the garden into a wonderland of red, pink and white.'],
            ['11', '"The Long Corridor" in the Summer Palace is the longest covered promenade in the world. It is built entirely of wood and runs for 728m.'],
            ['20', 'The world’s oldest pot plant, a huge Jurassic cyad, has lived there since 1775.'],
            ['20', 'Kew Gardens has had it’s own police force since the 1840s.'],
            ['20', 'In 1987 the world’s smallest water-lily was discovered in Mashyuza, Rwanda. Conservationists saved it from extinction by growing it from seeds at Kew Gardens. In 2014, one of these rare water lilies was stolen.'],
            ['12', 'As Monet became blinder, he began to paint his gardens by memory. One historian noted that his later paintings “verged on the abstract, with colors bleeding into each other and a lack of rational shape and perspective.”'],
            ['10', 'Gardens were first built on this site around 1131 and have been continually changed or destroyed since then.'],
            ['21', 'The Volksgarten was built on the ruins of city fortifications dating back to the late 16th century. In 1862, the gardens were extended after the city moat had been filled in.'],
            ['7', 'Villa d’Este contains fifty-one fountains and nymphaeums, 398 spouts, 364 water jets, 64 waterfalls, and 220 basins, fed by 875 metres of canals, channels and cascades. All are powered by gravity.'],
            ['2', 'The park extends up to 690 meters above sea level, with views over Lake Lugano and the Alpine peaks.'],
            ['6', 'The garden was designed in the Kaiyu ("scenic promenade") style which presents the visitor with a new view at every turn of the path which connects the lawns, ponds, hills, tea houses, and streams.'],
            ['13', 'Founded in 1939 by local citizens who saw the need to conserve the beautiful desert environment. One of whom found like-minded residents by posting a sign that read “Save the Desert.”.'],
            ['14', 'The château was constructed around the original 14th-century keep where King Philip II of France once met Richard I of England to discuss peace.'],
            ['16', 'The gardens were established in 1931-1940 on the western shore of Lake Maggiore by a Scotsman.'],
            ['25', 'The monument’s stones possess unusual acoustic properties – when struck they produce a loud clanging sound.'],
            ['25', 'Some of the monument’s smaller bluestones, which can still weigh up to four tons, have been geologically linked to the Preseli Mountains in Wales which are over 150 miles away.'],
            ['25', 'It was built over a period of 1,500 years. The oldest elements date back to around 3000 BCE. The signature stones started appearing around 2500 BCE, and the erection and rearranging of bluestones continued until around 1500 BCE. '],
            ['15', 'In 1789 a mob took the palace and the French Revolution began.'],
            ['15', 'In 1682 King Louis XIV moved home to Versailles from the Louvre in Paris.'],
            ['15', 'The kitchens of the Palace of Versailles were located so far from the King’s dining room that food was often cold by the time it arrived.'],
        ];

        for ($i=0; $i < count($funFacts); $i++) {
            $data[] = [
                'garden_id' => $funFacts[$i][0],
                'text' => $funFacts[$i][1],
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ];    
        }

        FunFact::insert($data);
    }
}
