<?php

use Illuminate\Database\Seeder;

class TrainingsTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
    DB::table('trainings')->insert([
['name'=>'Індивідуальні заняття в тренажерному залі', 'description'=>'','type'=>''],
['name'=>'Індивідуальні заняття в фітнес залі', 'description'=>'','type'=>''],
['name'=>'BODY  SCULPT','description'=>"Силовий урок, спрямований на опрацювання всіх груп м'язів. На тренуванні використовується різне обладнання. Середня інтенсивність.",'type'=>'силові'],
['name'=>'ABL (Abdominal-Buttocks-Legs)','description'=>"Силове тренування середньої і вище середньої інтенсивності для м'язів ніг, сідниць і черевного преса.",'type'=>'силові'],
['name'=>'UPER  BODY','description'=>"Силовий клас для тренування м'язів верхньої частини тіла (рук, грудей, спини, черевного преса). Це тренування з навантаженням середньої інтенсивності і підходить займаються будь-якого рівня підготовленості.",'type'=>'силові'],
['name'=>'FIT  BALL','description'=>"Клас з використанням спеціальних великих м'ячів. Покращує координацію рухів, тренує вестибулярний апарат, зміцнює різні групи м'язів. Рекомендується при варикозному розширенні вен. Середня інтенсивність.",'type'=>'силові'],
['name'=>'FIT-YOGA','description'=>"Йога для всіх, спеціальна адаптована фітнес тренування, заснована на принципах Йоги з використанням вправ на розтяжку, гнучкість, пластику.",'type'=>'розумне тіло'],
['name'=>'YOGA','description'=>"Комплекс оздоровчих вправ, що сприяє фізичної також глибокої внутрішньої роботи. Тренування на розвиток гнучкості і нормалізацію психоемоційного стану, підвищення загального тонусу. Рекомендується для будь-якого рівня підготовленості.",'type'=>'розумне тіло'],
['name'=>'PILATES','description'=>"Це система фізичних вправ, розроблених Джозефом пілатесом. Пілатес укріплює м'язи тіла, підвищує гнучкість і покращує загальний фізичний стан організму, а також зміцнює м'язи преса, покращує координацію і знижує стрес.",'type'=>'розумне тіло'],
['name'=>'STEP-SCULPT','description'=>"Урок степ-аеробіки плюс силовий блок. Навантаження високої інтенсивності, не рекомендується з варикозним розширенням вен.",'type'=>'кардіо'],
['name'=>'STEP-CHANGE','description'=>"Високоінтенсивна інтервальна тренування з використання степ платформи зі змінною навантаження по станціях.",'type'=>'кардіо'],
['name'=>'FITNESS  COCKTAIL','description'=>"Заняття включає в себе змішання різних напрямків аеробіки. Рекомендується для всіх рівнів підготовленості.",'type'=>'кардіо'],
['name'=>'BELLY DANCE','description'=>"Східний танець живота. Сила, пластика і краса стегон, плечей, і сідниць. Відрізняється особливим оздоровчим ефектом для органів черевної порожнини, формує поставу і покращує настрій.",'type'=>'танцювальні'],
['name'=>'STRIP PLASTIK','description'=>"Ніяких жердин і роздягання, тільки суперпластіка, супергібкость, суперочарованіе і музика !!! Жіноча пластика з елементами адаптованого стриптизу. Цей танець для тих, хто по-справжньому цінує жіночність, витонченість і легкий присмак витонченою еротики і привабливості в танці.",'type'=>'танцювальні'] ]);
    }
}
