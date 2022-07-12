<?php

namespace Database\Seeders;

use App\Models\CallToAction;
use Illuminate\Database\Seeder;

class CallToActionSeeder extends Seeder
{
    private $callToActions = [];
    private $data = [];

    /**
     * @return void
     */
    public function run()
    {
        $callToActions = [
            'Ok, quote time:<br><br> "I wandered lonely as a cloud, That floats on high o\'er vales and hills, When all at once I saw a crowd, A host, of golden daffodils; Beside the lake, beneath the trees, Fluttering and dancing in the breeze..." - William Wordsworth',
            'Ok, now go plant a seed and watch it grow!<br><br>Please : )',
            'Ok, so have you planted any seeds lately? How are they doing?',
            'Ok, now how about going outside for a bit?<br><br>Please : )',
            'Ok, so what was the last plant you touched?',
            'Ok, so what\'s the weather like there?',
            'Ok, so what\'s your favourite plant?',
            'Ok, so when did you last cry?',
            'Ok, so what was the last garden you visited?',
            'Ok, so what\'s the first garden you remember being in?',
            'Ok, so when did you last laugh?',
            'Ok, quote time: "Creating a garden starts as an interest and soon becomes a lifetime\'s obsession. One that can be engaged in a moment\'s notice, by simply stepping outside." from This Beautiful Fantastic',
            'Ok, now go touch some soil!<br><br>Please &nbsp; : )',
            'Ok, now go touch a leaf!<br><br>Please &nbsp; :-)',
            'Ok, quote time: "A garden is a grand teacher. It teaches patience and careful watchfulness; it teaches industry and thrift; above all it teaches entire trust." - Gertrude Jekyll',
            'Ok, now go touch a flower!<br><br>Please &nbsp; : )',
            'Ok, now go touch a stone!<br><br>Please :-)',
            'Ok, now take a deep breath and try to engage your diaphragm!<br><br>Please &nbsp; : )',
            'Ok, now go take a plant cutting!<br><br>Please : )',
            'Ok, quote time: "There is no spot of ground, however arid, bare or ugly, that cannot be tamed into such a state as may give an impression of beauty and delight." - Gertrude Jekyll',
            'Ok, now go touch some sand!<br><br>Please : )',
            'Ok, now go touch some gravel!<br><br>Please : )',
            'Ok, now go touch some water!<br><br>Please &nbsp;:-)',
            'Ok, now go touch some nitrogen!<br><br>Please : )',
            'Ok, quote time: "The lesson I have thoroughly learnt, and wish to pass on to others, is to know the enduring happiness that the love of a garden gives." - Gertrude Jekyll',
            'Ok, now go compost something!<br><br>Please &nbsp;: )',
            'Ok, now do a push up!<br><br>Please : )',
            'Ok, now go touch a human!<br><br>Please : )',
            'Ok, now go touch a worm!<br><br>Please &nbsp;:-)',
            'Ok, quote time: "The love of gardening is a seed once sown that never dies." - Gertrude Jekyll',
            'Ok, now do a sit-up!<br><br>Please : )',
            'Ok, now go touch a rizome!<br><br>Please :-)',
            'Ok, so what was the last garden you visited?'
        ];

        for ($i=0; $i < count($callToActions); $i++) {
            $data[] = [
                'text' => $callToActions[$i],
                'created_at' => now()->toDateTimeString(),
                'updated_at' => now()->toDateTimeString(),
            ];    
        }

        CallToAction::insert($data);
    }
}
