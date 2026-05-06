<?php
session_start();

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестирование Кэттелла</title>
    <link rel="stylesheet" href="..\bootstrap\css\bootstrap.css">
    <link rel="stylesheet" href="..\bootstrap\css\bootstrap-grid.css">
    <link rel="stylesheet" href="..\bootstrap\css\custom.css">
</head>
<body>

<div class="container">
    <div class="row">
        <form action="processing.php">
        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 1</h5>
                    <p class="card-text">Я хорошо понял инструкцию, которую только что прочитал:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-1" id="q1_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q1_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-1" id="q1_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q1_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-1" id="q1_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q1_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 2</h5>
                    <p class="card-text">Я готов отвечать на каждый вопрос так искренне, как только возможно:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-2" id="q2_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q2_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-2" id="q2_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q2_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-2" id="q2_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q2_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 3</h5>
                    <p class="card-text">Я бы предпочел временами жить в доме, который находится:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-3" id="q3_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q3_a">в обжитом городе</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-3" id="q3_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q3_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-3" id="q3_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q3_c">одиноко в глухих лесах</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 4</h5>
                    <p class="card-text">Я чувствую в себе достаточно сил, чтобы справиться со своими трудностями:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-4" id="q4_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q4_a">всегда</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-4" id="q4_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q4_b">обычно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-4" id="q4_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q4_c">редко</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 5</h5>
                    <p class="card-text">Я чувствую некоторое беспокойство при виде диких животных, даже если они находятся в прочных клетках:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-5" id="q5_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q5_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-5" id="q5_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q5_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-5" id="q5_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q5_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 6</h5>
                    <p class="card-text">Я воздерживаюсь от критики людей и их высказываний:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-6" id="q6_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q6_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-6" id="q6_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q6_b">иногда</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-6" id="q6_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q6_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 7</h5>
                    <p class="card-text">Я делаю саркастические (язвительные) замечания по поводу людей, если они этого, по-моему, заслуживают:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-7" id="q7_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q7_a">обычно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-7" id="q7_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q7_b">иногда</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-7" id="q7_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q7_c">никогда</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 8</h5>
                    <p class="card-text">Мне больше нравится классическая, чем эстрадная музыка:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-8" id="q8_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q8_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-8" id="q8_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q8_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-8" id="q8_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q8_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 9</h5>
                    <p class="card-text">Если бы я увидел дерущимися соседских детей, то я:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-9" id="q9_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q9_a">дал бы им возможность договориться самим</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-9" id="q9_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q9_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-9" id="q9_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q9_c">рассудил бы их</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 10</h5>
                    <p class="card-text">При общении с людьми я:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-10" id="q10_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q10_a">с готовностью вступаю в разговор</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-10" id="q10_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q10_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-10" id="q10_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q10_c">предпочитаю спокойно оставаться в стороне</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 11</h5>
                    <p class="card-text">По-моему, интереснее быть:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-11" id="q11_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q11_a">инженером-строителем</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-11" id="q11_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q11_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-11" id="q11_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q11_c">драматургом</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 12</h5>
                    <p class="card-text">Я остановился бы на улице скорее, чтобы посмотреть на работу художника, чем слушать, как ссорятся люди:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-12" id="q12_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q12_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-12" id="q12_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q12_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-12" id="q12_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q12_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 13</h5>
                    <p class="card-text">Обычно я могу ладить с самодовольными людьми, несмотря на то, что они хвастаются или слишком много о себе воображают:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-13" id="q13_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q13_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-13" id="q13_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q13_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-13" id="q13_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q13_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 14</h5>
                    <p class="card-text">По лицу человека всегда можно заметить, что он нечестный:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-14" id="q14_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q14_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-14" id="q14_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q14_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-14" id="q14_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q14_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 15</h5>
                    <p class="card-text">Было бы хорошо, если бы отпуск (каникулы) был более продолжителен, и каждый был бы обязан его использовать:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-15" id="q15_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q15_a">согласен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-15" id="q15_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q15_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-15" id="q15_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q15_c">не согласен</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 16</h5>
                    <p class="card-text">Я предпочел бы работу с возможно большим, но непостоянным заработком, чем работу со скромным, но постоянным окладом:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-16" id="q16_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q16_a">согласен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-16" id="q16_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q16_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-16" id="q16_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q16_c">не согласен</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 17</h5>
                    <p class="card-text">Я говорю о своих чувствах:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-17" id="q17_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q17_a">только если это необходимо</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-17" id="q17_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q17_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-17" id="q17_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q17_c">охотно, когда представится возможность</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 18</h5>
                    <p class="card-text">Время от времени у меня возникает чувство неопределенной опасности или внезапного страха по непонятным причинам:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-18" id="q18_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q18_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-18" id="q18_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q18_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-18" id="q18_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q18_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 19</h5>
                    <p class="card-text">Когда меня неправильно критикуют за что-то, в чем я не виноват, я:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-19" id="q19_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q19_a">не испытываю чувства вины</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-19" id="q19_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q19_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-19" id="q19_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q19_c">все же чувствую себя немного виноватым</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 20</h5>
                    <p class="card-text">За деньги можно купить почти все:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-20" id="q20_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q20_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-20" id="q20_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q20_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-20" id="q20_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q20_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 21</h5>
                    <p class="card-text">Моим решением руководит больше:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-21" id="q21_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q21_a">сердце</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-21" id="q21_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q21_b">сердце и разум в равной степени</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-21" id="q21_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q21_c">разум</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 22</h5>
                    <p class="card-text">Большинство людей были бы больше счастливы, если бы они были ближе друг к другу и поступали так же, как все:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-22" id="q22_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q22_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-22" id="q22_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q22_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-22" id="q22_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q22_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 23</h5>
                    <p class="card-text">Иногда, когда я смотрю в зеркало, мне трудно разобраться, где у меня правая, а где левая сторона:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-23" id="q23_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q23_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-23" id="q23_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q23_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-23" id="q23_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q23_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 24</h5>
                    <p class="card-text">При разговоре я предпочитаю:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-24" id="q24_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q24_a">высказывать свои мысли так, как они приходят мне в голову</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-24" id="q24_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q24_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-24" id="q24_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q24_c">сначала сформулировать получше свои мысли</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 25</h5>
                    <p class="card-text">После того как меня что-то сильно рассердит, я довольно быстро успокаиваюсь:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-25" id="q25_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q25_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-25" id="q25_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q25_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-25" id="q25_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q25_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 26</h5>
                    <p class="card-text">При одинаковом рабочем времени и заработке было бы интереснее работать:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-26" id="q26_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q26_a">плотником или поваром</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-26" id="q26_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q26_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-26" id="q26_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q26_c">официантом в хорошем ресторане</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 27</h5>
                    <p class="card-text">На общественные должности меня выбирали:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-27" id="q27_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q27_a">очень редко</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-27" id="q27_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q27_b">иногда</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-27" id="q27_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q27_c">много раз</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 28</h5>
                    <p class="card-text">«Лопата» относится к «копать», как «нож» относится к:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-28" id="q28_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q28_a">острый</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-28" id="q28_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q28_b">резать</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-28" id="q28_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q28_c">указывать</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 29</h5>
                    <p class="card-text">Иногда я не могу заснуть потому что какая-нибудь мысль не выходит из головы:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-29" id="q29_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q29_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-29" id="q29_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q29_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-29" id="q29_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q29_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 30</h5>
                    <p class="card-text">В своей жизни я почти всегда достигаю поставленных целей:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-30" id="q30_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q30_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-30" id="q30_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q30_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-30" id="q30_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q30_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 31</h5>
                    <p class="card-text">Устаревший закон следует изменить:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-31" id="q31_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q31_a">только после основательного обсуждения</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-31" id="q31_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q31_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-31" id="q31_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q31_c">как можно скорее</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 32</h5>
                    <p class="card-text">Я чувствую себя «не в своей тарелке», когда мне приходится работать над чем-нибудь, что требует быстрых действий, результаты которых могут повлиять на других людей:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-32" id="q32_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q32_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-32" id="q32_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q32_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-32" id="q32_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q32_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 33</h5>
                    <p class="card-text">Большинство знакомых считают меня интересным рассказчиком:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-33" id="q33_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q33_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-33" id="q33_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q33_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-33" id="q33_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q33_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 34</h5>
                    <p class="card-text">Когда я вижу неряшливых, неопрятных людей, я:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-34" id="q34_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q34_a">принимаю их такими, как они есть</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-34" id="q34_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q34_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-34" id="q34_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q34_c">испытываю отвращение и возмущение</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 35</h5>
                    <p class="card-text">Я чувствую себя немного не по себе, если неожиданно оказываюсь в центре внимания группы людей:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-35" id="q35_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q35_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-35" id="q35_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q35_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-35" id="q35_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q35_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 36</h5>
                    <p class="card-text">Я всегда рад оказаться среди людей, например, в гостях, на танцах, коллективной встрече:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-36" id="q36_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q36_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-36" id="q36_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q36_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-36" id="q36_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q36_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 37</h5>
                    <p class="card-text">В школе я предпочитал (или предпочитаю):</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-37" id="q37_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q37_a">заниматься музыкой, пением</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-37" id="q37_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q37_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-37" id="q37_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q37_c">выпиливать и мастерить что-либо</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 38</h5>
                    <p class="card-text">Если меня назначают руководителем чего-либо, я настаиваю на том, чтобы мои указания выполнялись, иначе я отказываюсь от этой работы:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-38" id="q38_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q38_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-38" id="q38_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q38_b">иногда</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-38" id="q38_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q38_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 39</h5>
                    <p class="card-text">Важнее, чтобы родители:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-39" id="q39_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q39_a">помогали детям развивать свои чувства</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-39" id="q39_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q39_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-39" id="q39_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q39_c">обучали детей сдерживать свои чувства</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 40</h5>
                    <p class="card-text">Участвуя в групповой деятельности, я бы предпочел:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-40" id="q40_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q40_a">постараться улучшить организацию работы</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-40" id="q40_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q40_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-40" id="q40_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q40_c">следить за результатами и соблюдением правил</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 41</h5>
                    <p class="card-text">Время от времени у меня появляется потребность в интересной физической деятельности:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-41" id="q41_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q41_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-41" id="q41_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q41_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-41" id="q41_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q41_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 42</h5>
                    <p class="card-text">Я предпочел бы скорее общаться с вежливыми людьми, чем с грубоватыми и любящими возражать:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-42" id="q42_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q42_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-42" id="q42_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q42_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-42" id="q42_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q42_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 43</h5>
                    <p class="card-text">Я чувствую себя очень униженным, когда меня критикуют в присутствии группы людей:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-43" id="q43_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q43_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-43" id="q43_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q43_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-43" id="q43_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q43_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 44</h5>
                    <p class="card-text">Если меня вызывает начальство, то я:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-44" id="q44_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q44_a">пользуюсь случаем, чтобы попросить о чем-то нужном мне</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-44" id="q44_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q44_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-44" id="q44_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q44_c">боюсь, что это связано с какой-нибудь оплошностью в моей работе</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 45</h5>
                    <p class="card-text">В наше время требуется:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-45" id="q45_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q45_a">больше спокойных, солидных людей</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-45" id="q45_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q45_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-45" id="q45_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q45_c">больше «идеалистов», планирующих лучшее будущее</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 46</h5>
                    <p class="card-text">При чтении я сразу замечаю, когда автор произведения хочет меня в чем-то убедить:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-46" id="q46_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q46_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-46" id="q46_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q46_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-46" id="q46_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q46_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 47</h5>
                    <p class="card-text">В юности я принимал участие в нескольких спортивных мероприятиях:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-47" id="q47_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q47_a">иногда</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-47" id="q47_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q47_b">довольно часто</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-47" id="q47_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q47_c">многократно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 48</h5>
                    <p class="card-text">Я поддерживаю порядок в моей комнате, все вещи всегда лежат на своих местах:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-48" id="q48_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q48_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-48" id="q48_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q48_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-48" id="q48_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q48_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 49</h5>
                    <p class="card-text">Иногда у меня возникает чувство напряжения и беспокойства, когда я вспоминаю, что произошло в течение дня:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-49" id="q49_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q49_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-49" id="q49_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q49_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-49" id="q49_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q49_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 50</h5>
                    <p class="card-text">Иногда я сомневаюсь, действительно ли люди, с которыми я разговариваю, интересуются тем, что я говорю:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-50" id="q50_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q50_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-50" id="q50_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q50_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-50" id="q50_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q50_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 51</h5>
                    <p class="card-text">Если бы пришлось выбирать, то я предпочел бы быть:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-51" id="q51_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q51_a">лесником</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-51" id="q51_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q51_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-51" id="q51_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q51_c">учителем средней школы</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 52</h5>
                    <p class="card-text">На праздники и дни рождения я:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-52" id="q52_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q52_a">люблю делать подарки</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-52" id="q52_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q52_b">неопределенно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-52" id="q52_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q52_c">считаю, что делать подарки – довольно неприятная вещь</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 53</h5>
                    <p class="card-text">«Усталый» относится к «работе», как «гордый» к:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-53" id="q53_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q53_a">улыбка</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-53" id="q53_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q53_b">успех</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-53" id="q53_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q53_c">счастливый</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 54</h5>
                    <p class="card-text">Какой из следующих предметов по существу отличается от двух других:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-54" id="q54_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q54_a">свеча</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-54" id="q54_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q54_b">луна</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-54" id="q54_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q54_c">электрический свет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 55</h5>
                    <p class="card-text">Друзья меня подводили:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-55" id="q55_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q55_a">очень редко</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-55" id="q55_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q55_b">иногда</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-55" id="q55_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q55_c">довольно часто</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 56</h5>
                    <p class="card-text">У меня есть качества, по которым я определенно выше большинства людей:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-56" id="q56_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q56_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-56" id="q56_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q56_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-56" id="q56_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q56_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 57</h5>
                    <p class="card-text">Когда я расстроен, я стараюсь скрыть свои чувства от других:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-57" id="q57_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q57_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-57" id="q57_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q57_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-57" id="q57_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q57_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 58</h5>
                    <p class="card-text">Я склонен посещать зрелищные мероприятия и развлечения:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-58" id="q58_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q58_a">чаще, чем раз в неделю (т.е. чаще, чем большинство)</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-58" id="q58_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q58_b">примерно раз в неделю (т.е. как большинство)</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-58" id="q58_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q58_c">реже, чем раз в неделю (т.е. реже, чем большинство)</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 59</h5>
                    <p class="card-text">Я считаю, что возможность вести себя непринужденно важнее, чем хорошие манеры и уважение к существующим правилам поведения:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-59" id="q59_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q59_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-59" id="q59_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q59_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-59" id="q59_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q59_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 60</h5>
                    <p class="card-text">Обычно я молчу в присутствии старших по возрасту, опыту и положению:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-60" id="q60_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q60_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-60" id="q60_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q60_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-60" id="q60_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q60_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 61</h5>
                    <p class="card-text">Мне трудно говорить или декламировать перед большой группой людей:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-61" id="q61_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q61_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-61" id="q61_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q61_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-61" id="q61_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q61_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 62</h5>
                    <p class="card-text">У меня хорошее чувство ориентировки в незнакомом месте (мне легко сказать, где север – восток – юг – запад):</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-62" id="q62_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q62_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-62" id="q62_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q62_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-62" id="q62_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q62_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 63</h5>
                    <p class="card-text">Если кто-нибудь рассердится на меня, то я:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-63" id="q63_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q63_a">постараюсь его успокоить</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-63" id="q63_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q63_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-63" id="q63_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q63_c">раздражаюсь</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 64</h5>
                    <p class="card-text">Встречаясь с несправедливостью, я скорее склонен забыть об этом, чем реагировать:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-64" id="q64_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q64_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-64" id="q64_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q64_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-64" id="q64_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q64_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 65</h5>
                    <p class="card-text">Из моей памяти часто выпадают несущественные тривиальные вещи, например, названия улиц, магазинов:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-65" id="q65_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q65_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-65" id="q65_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q65_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-65" id="q65_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q65_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 66</h5>
                    <p class="card-text">Мне бы понравилась жизнь ветеринара, лечение и операции на животных:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-66" id="q66_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q66_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-66" id="q66_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q66_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-66" id="q66_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q66_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 67</h5>
                    <p class="card-text">Я ем со вкусом, не всегда так аккуратно и тщательно как другие люди:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-67" id="q67_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q67_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-67" id="q67_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q67_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-67" id="q67_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q67_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 68</h5>
                    <p class="card-text">Бывают времена, когда у меня нет настроения видеть кого бы то ни было:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-68" id="q68_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q68_a">очень редко</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-68" id="q68_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q68_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-68" id="q68_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q68_c">довольно часто</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 69</h5>
                    <p class="card-text">Иногда меня предупреждают о том, что в моем голосе и манерах слишком проявляется возбуждение:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-69" id="q69_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q69_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-69" id="q69_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q69_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-69" id="q69_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q69_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 70</h5>
                    <p class="card-text">В юности, если я расходился во мнении с родителями, то я:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-70" id="q70_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q70_a">оставался при своем мнении</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-70" id="q70_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q70_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-70" id="q70_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q70_c">соглашался с их авторитетом</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 71</h5>
                    <p class="card-text">Я предпочел бы заниматься самостоятельной работой, а не совместной с другими:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-71" id="q71_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q71_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-71" id="q71_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q71_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-71" id="q71_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q71_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 72</h5>
                    <p class="card-text">Мне бы больше понравилась спокойная жизнь, чем слава и шумный успех:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-72" id="q72_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q72_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-72" id="q72_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q72_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-72" id="q72_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q72_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 73</h5>
                    <p class="card-text">В большинстве случаев я чувствую себя зрелым человеком:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-73" id="q73_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q73_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-73" id="q73_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q73_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-73" id="q73_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q73_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 74</h5>
                    <p class="card-text">Замечания в мой адрес, которые позволяют себе некоторые люди, меня больше расстраивают, чем помогают:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-74" id="q74_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q74_a">часто</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-74" id="q74_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q74_b">иногда</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-74" id="q74_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q74_c">никогда</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 75</h5>
                    <p class="card-text">Я всегда способен управлять проявлением своих чувств:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-75" id="q75_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q75_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-75" id="q75_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q75_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-75" id="q75_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q75_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 76</h5>
                    <p class="card-text">Начиная работу над полезным изобретением, я бы предпочел:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-76" id="q76_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q76_a">разрабатывать его в лаборатории</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-76" id="q76_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q76_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-76" id="q76_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q76_c">заниматься его практической реализацией</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 77</h5>
                    <p class="card-text">«Удивление» относится к «странный», как «страх» относится к:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-77" id="q77_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q77_a">смелый</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-77" id="q77_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q77_b">тревожный</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-77" id="q77_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q77_c">ужасный</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 78</h5>
                    <p class="card-text">Которая из последующих дробей отличается от двух других:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-78" id="q78_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q78_a">3/7</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-78" id="q78_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q78_b">3/9</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-78" id="q78_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q78_c">3/11</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 79</h5>
                    <p class="card-text">Кажется, некоторые люди игнорируют и избегают меня, хотя я не знаю, почему:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-79" id="q79_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q79_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-79" id="q79_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q79_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-79" id="q79_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q79_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 80</h5>
                    <p class="card-text">Отношения ко мне людей не соответствуют моим добрым намерениям:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-80" id="q80_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q80_a">часто</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-80" id="q80_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q80_b">иногда</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-80" id="q80_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q80_c">никогда</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 81</h5>
                    <p class="card-text">Употребление нецензурных выражений вызывает у меня возмущение, даже если не присутствуют лица другого пола:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-81" id="q81_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q81_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-81" id="q81_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q81_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-81" id="q81_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q81_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 82</h5>
                    <p class="card-text">У меня определенно меньше друзей, чем у большинства людей:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-82" id="q82_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q82_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-82" id="q82_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q82_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-82" id="q82_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q82_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 83</h5>
                    <p class="card-text">Я бы очень не хотел находиться в таком месте, где нет таких людей, с которыми можно поговорить:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-83" id="q83_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q83_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-83" id="q83_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q83_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-83" id="q83_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q83_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 84</h5>
                    <p class="card-text">Люди иногда считают меня небрежным, хотя и думают, что я приятный человек:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-84" id="q84_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q84_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-84" id="q84_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q84_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-84" id="q84_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q84_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 85</h5>
                    <p class="card-text">Волнение перед выступлением в присутствии многих людей я испытывал:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-85" id="q85_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q85_a">довольно часто</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-85" id="q85_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q85_b">иногда</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-85" id="q85_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q85_c">почти никогда</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 86</h5>
                    <p class="card-text">Когда я нахожусь в большой группе людей, то я предпочитаю молчать и предоставляю слово другим:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-86" id="q86_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q86_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-86" id="q86_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q86_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-86" id="q86_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q86_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 87</h5>
                    <p class="card-text">Я предпочитаю читать:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-87" id="q87_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q87_a">реалистические описания военных и политических сражений</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-87" id="q87_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q87_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-87" id="q87_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q87_c">роман, где много чувств и воображения</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 88</h5>
                    <p class="card-text">Когда люди пытаются мною командовать, то я поступаю как раз наоборот:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-88" id="q88_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q88_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-88" id="q88_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q88_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-88" id="q88_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q88_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 89</h5>
                    <p class="card-text">Начальник или члены моей семьи критикуют меня только тогда, когда к этому действительно есть повод:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-89" id="q89_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q89_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-89" id="q89_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q89_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-89" id="q89_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q89_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 90</h5>
                    <p class="card-text">На улицах или в магазинах мне не нравится, когда некоторые люди пристально разглядывают других:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-90" id="q90_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q90_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-90" id="q90_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q90_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-90" id="q90_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q90_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 91</h5>
                    <p class="card-text">Во время длительной поездки я бы предпочел:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-91" id="q91_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q91_a">читать что-нибудь серьезное, но интересное</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-91" id="q91_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q91_b">неопределенно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-91" id="q91_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q91_c">провести время, беседуя с кем-нибудь из пассажиров</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 92</h5>
                    <p class="card-text">В ситуациях, которые могут стать опасными, я громко разговариваю, хотя это выглядит невежливо и нарушает спокойствие:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-92" id="q92_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q92_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-92" id="q92_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q92_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-92" id="q92_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q92_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 93</h5>
                    <p class="card-text">Если знакомые плохо обращаются со мной и показывают свою неприязнь, то:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-93" id="q93_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q93_a">меня это совершенно не трогает</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-93" id="q93_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q93_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-93" id="q93_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q93_c">я расстраиваюсь</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 94</h5>
                    <p class="card-text">Я смущаюсь, когда меня хвалят или говорят мне комплименты:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-94" id="q94_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q94_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-94" id="q94_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q94_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-94" id="q94_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q94_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 95</h5>
                    <p class="card-text">Я бы предпочел иметь работу:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-95" id="q95_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q95_a">с постоянным окладом</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-95" id="q95_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q95_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-95" id="q95_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q95_c">с большим окладом, который бы зависел от моей способности показать людям, чего я стою</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 96</h5>
                    <p class="card-text">Чтобы быть информированным, я предпочитаю получать сведения:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-96" id="q96_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q96_a">в общении с людьми</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-96" id="q96_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q96_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-96" id="q96_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q96_c">из литературы</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 97</h5>
                    <p class="card-text">Мне нравится принимать активное участие в общественной работе:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-97" id="q97_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q97_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-97" id="q97_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q97_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-97" id="q97_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q97_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 98</h5>
                    <p class="card-text">При выполнении задания я удовлетворяюсь только тогда, когда должное внимание будет уделено всем мелочам:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-98" id="q98_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q98_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-98" id="q98_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q98_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-98" id="q98_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q98_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 99</h5>
                    <p class="card-text">Даже самые незначительные неудачи иногда меня слишком раздражают:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-99" id="q99_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q99_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-99" id="q99_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q99_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-99" id="q99_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q99_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 100</h5>
                    <p class="card-text">Сон у меня всегда крепкий, я никогда не хожу и не разговариваю во сне:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-100" id="q100_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q100_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-100" id="q100_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q100_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-100" id="q100_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q100_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 101</h5>
                    <p class="card-text">Для меня интереснее работа, при которой:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-101" id="q101_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q101_a">нужно разговаривать с людьми</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-101" id="q101_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q101_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-101" id="q101_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q101_c">нужно заниматься счетами и записями</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 102</h5>
                    <p class="card-text">«Размер» так относится к «длине», как «нечестный» к:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-102" id="q102_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q102_a">тюрьма</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-102" id="q102_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q102_b">нарушение</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-102" id="q102_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q102_c">кража</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 103</h5>
                    <p class="card-text">«АБ» так относится к «ГВ», как «СР» относится к:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-103" id="q103_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q103_a">ПО</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-103" id="q103_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q103_b">ОП</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-103" id="q103_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q103_c">ТУ</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 104</h5>
                    <p class="card-text">Когда люди ведут себя неразумно, то я:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-104" id="q104_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q104_a">молчу</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-104" id="q104_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q104_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-104" id="q104_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q104_c">высказываю свое презрение</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 105</h5>
                    <p class="card-text">Если кто-нибудь громко разговаривает, когда я слушаю музыку:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-105" id="q105_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q105_a">могу сосредоточиться на музыке, не отвлекаться</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-105" id="q105_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q105_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-105" id="q105_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q105_c">чувствую, что это портит мне удовольствие и раздражает</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 106</h5>
                    <p class="card-text">Меня лучше характеризовать как:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-106" id="q106_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q106_a">вежливого и спокойного</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-106" id="q106_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q106_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-106" id="q106_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q106_c">энергичного</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 107</h5>
                    <p class="card-text">В общественных мероприятиях я принимаю участие только тогда, когда это нужно, а в иных случаях избегаю их:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-107" id="q107_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q107_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-107" id="q107_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q107_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-107" id="q107_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q107_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 108</h5>
                    <p class="card-text">Быть осторожным и не ждать хорошего лучше, чем быть оптимистом и всегда ждать успеха:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-108" id="q108_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q108_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-108" id="q108_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q108_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-108" id="q108_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q108_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 109</h5>
                    <p class="card-text">Думая о трудностях в своей работе, я:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-109" id="q109_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q109_a">стараюсь планировать заранее, прежде чем встретить трудность</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-109" id="q109_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q109_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-109" id="q109_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q109_c">считаю, что справлюсь с трудностями по мере того, как они возникнут</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 110</h5>
                    <p class="card-text">Мне легко вступить в контакт с людьми во время различных общественных мероприятий:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-110" id="q110_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q110_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-110" id="q110_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q110_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-110" id="q110_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q110_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 111</h5>
                    <p class="card-text">Когда требуется немного дипломатии и умения убедить, чтобы побудить людей что-либо сделать, обычно об этом просят меня:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-111" id="q111_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q111_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-111" id="q111_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q111_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-111" id="q111_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q111_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 112</h5>
                    <p class="card-text">Интересно быть:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-112" id="q112_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q112_a">консультантом, помогающим людям выбирать профессию</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-112" id="q112_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q112_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-112" id="q112_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q112_c">руководителем технического предприятия</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 113</h5>
                    <p class="card-text">Если я уверен, что человек несправедлив или ведет себя эгоистично, я указываю на это, даже если это связано с неприятностями:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-113" id="q113_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q113_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-113" id="q113_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q113_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-113" id="q113_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q113_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 114</h5>
                    <p class="card-text">Иногда я говорю глупости ради шутки, чтобы удивить людей и посмотреть, что они на это скажут:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-114" id="q114_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q114_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-114" id="q114_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q114_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-114" id="q114_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q114_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 115</h5>
                    <p class="card-text">Мне бы понравилось быть газетным критиком в разделе драмы, театра, концертов:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-115" id="q115_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q115_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-115" id="q115_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q115_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-115" id="q115_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q115_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 116</h5>
                    <p class="card-text">У меня никогда не бывает потребности что-нибудь рисовать или вертеть в руках, ерзать на месте, когда приходится долго сидеть на собрании:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-116" id="q116_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q116_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-116" id="q116_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q116_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-116" id="q116_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q116_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 117</h5>
                    <p class="card-text">Если кто-нибудь говорит мне что-то неправильное, то я скорее подумаю:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-117" id="q117_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q117_a">он – лжец</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-117" id="q117_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q117_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-117" id="q117_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q117_c">по-видимому, он плохо информирован</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 118</h5>
                    <p class="card-text">Я чувствую, что мне угрожает какое-то наказание, даже когда я ничего плохого не сделал:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-118" id="q118_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q118_a">часто</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-118" id="q118_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q118_b">иногда</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-118" id="q118_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q118_c">никогда</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 119</h5>
                    <p class="card-text">Мнение о том, что болезнь также часто бывает от психических, как и от физических факторов, сильно преувеличено:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-119" id="q119_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q119_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-119" id="q119_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q119_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-119" id="q119_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q119_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 120</h5>
                    <p class="card-text">Торжественность и величие традиционных церемоний следует сохранить:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-120" id="q120_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q120_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-120" id="q120_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q120_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-120" id="q120_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q120_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 121</h5>
                    <p class="card-text">Мысль о том, что люди подумают, будто я веду себя необычно или странно, меня беспокоит:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-121" id="q121_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q121_a">очень</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-121" id="q121_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q121_b">немного</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-121" id="q121_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q121_c">совсем не беспокоит</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 122</h5>
                    <p class="card-text">Выполняя какое-либо дело, я бы предпочел работать:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-122" id="q122_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q122_a">в составе коллектива</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-122" id="q122_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q122_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-122" id="q122_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q122_c">самостоятельно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 123</h5>
                    <p class="card-text">У меня бывают периоды, когда мне трудно избавиться от чувства жалости к себе:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-123" id="q123_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q123_a">часто</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-123" id="q123_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q123_b">иногда</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-123" id="q123_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q123_c">никогда</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 124</h5>
                    <p class="card-text">Часто я слишком быстро начинаю сердиться на людей:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-124" id="q124_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q124_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-124" id="q124_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q124_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-124" id="q124_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q124_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 125</h5>
                    <p class="card-text">Я всегда могу без труда изменить свои старые привычки и не возвращаться к прежнему:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-125" id="q125_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q125_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-125" id="q125_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q125_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-125" id="q125_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q125_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 126</h5>
                    <p class="card-text">Если бы зарплата была одинаковой, то я предпочел бы быть:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-126" id="q126_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q126_a">адвокатом</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-126" id="q126_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q126_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-126" id="q126_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q126_c">пилотом или капитаном судна</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 127</h5>
                    <p class="card-text">«Лучшее» так относится к «наихудшее», как «медленное» к:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-127" id="q127_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q127_a">быстрое</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-127" id="q127_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q127_b">лучшее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-127" id="q127_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q127_c">быстрейшее</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 128</h5>
                    <p class="card-text">Каким из приведенных ниже сочетаний следует продолжить буквенный ряд РООООРРОООРРР...:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-128" id="q128_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q128_a">ОРРР</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-128" id="q128_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q128_b">ООРР</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-128" id="q128_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q128_c">РООО</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 129</h5>
                    <p class="card-text">Когда приходит время осуществить то, что я планировал и на что надеялся, я обнаруживаю, что уже пропало желание делать это:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-129" id="q129_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q129_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-129" id="q129_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q129_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-129" id="q129_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q129_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 130</h5>
                    <p class="card-text">Большей частью я могу продолжать работать тщательно, не обращая внимания на шум, создаваемый другими:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-130" id="q130_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q130_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-130" id="q130_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q130_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-130" id="q130_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q130_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 131</h5>
                    <p class="card-text">Иногда я говорю посторонним вещи, кажущиеся мне важными, независимо от того, спрашивают ли они об этом:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-131" id="q131_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q131_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-131" id="q131_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q131_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-131" id="q131_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q131_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 132</h5>
                    <p class="card-text">Много свободного времени я провожу в разговорах с друзьями о прошлых развлечениях, от которых я получал удовольствие:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-132" id="q132_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q132_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-132" id="q132_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q132_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-132" id="q132_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q132_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 133</h5>
                    <p class="card-text">Мне нравится устраивать какие-нибудь смелые рискованные выходки «смеха ради»:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-133" id="q133_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q133_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-133" id="q133_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q133_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-133" id="q133_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q133_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 134</h5>
                    <p class="card-text">Вид неубранной комнаты очень раздражает меня:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-134" id="q134_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q134_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-134" id="q134_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q134_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-134" id="q134_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q134_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 135</h5>
                    <p class="card-text">Я считаю себя общительным открытым человеком:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-135" id="q135_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q135_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-135" id="q135_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q135_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-135" id="q135_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q135_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 136</h5>
                    <p class="card-text">В общении я:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-136" id="q136_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q136_a">свободно проявляю свои чувства</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-136" id="q136_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q136_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-136" id="q136_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q136_c">держу свои переживания «при себе»</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 137</h5>
                    <p class="card-text">Я люблю музыку:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-137" id="q137_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q137_a">легкую, живую</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-137" id="q137_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q137_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-137" id="q137_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q137_c">чувствительную</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 138</h5>
                    <p class="card-text">Красота поэмы восхищает меня больше, чем красота хорошо сделанного оружия:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-138" id="q138_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q138_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-138" id="q138_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q138_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-138" id="q138_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q138_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 139</h5>
                    <p class="card-text">Если мое удачное замечание остается незамеченным окружающими, то я:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-139" id="q139_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q139_a">смирюсь с этим</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-139" id="q139_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q139_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-139" id="q139_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q139_c">даю людям возможность услышать его еще раз</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 140</h5>
                    <p class="card-text">Мне бы понравилось работать фотокорреспондентом:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-140" id="q140_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q140_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-140" id="q140_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q140_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-140" id="q140_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q140_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 141</h5>
                    <p class="card-text">Нужно быть осторожным в общении с незнакомыми, так как можно, например, заразиться:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-141" id="q141_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q141_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-141" id="q141_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q141_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-141" id="q141_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q141_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 142</h5>
                    <p class="card-text">При поездке за границу я бы предпочел быть под руководством экскурсовода, чем самому планировать маршрут:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-142" id="q142_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q142_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-142" id="q142_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q142_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-142" id="q142_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q142_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 143</h5>
                    <p class="card-text">Меня справедливо считают упорным и трудолюбивым, но не слишком преуспевающим человеком:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-143" id="q143_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q143_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-143" id="q143_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q143_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-143" id="q143_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q143_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 144</h5>
                    <p class="card-text">Если люди пользуются моим хорошим отношением в своих интересах, то я не возмущаюсь этим и вскоре об этом забываю:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-144" id="q144_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q144_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-144" id="q144_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q144_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-144" id="q144_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q144_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 145</h5>
                    <p class="card-text">Если при обсуждении какого-либо вопроса среди участников возникает ожесточенный спор, то я предпочитаю:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-145" id="q145_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q145_a">увидеть, кто же «победил»</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-145" id="q145_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q145_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-145" id="q145_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q145_c">чтобы спор разрешился мирно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 146</h5>
                    <p class="card-text">Я предпочитаю планировать что-либо самостоятельно, без вмешательства и предложений со стороны других:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-146" id="q146_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q146_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-146" id="q146_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q146_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-146" id="q146_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q146_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 147</h5>
                    <p class="card-text">Иногда чувство зависти влияет на мои действия:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-147" id="q147_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q147_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-147" id="q147_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q147_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-147" id="q147_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q147_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 148</h5>
                    <p class="card-text">Я твердо верю, что начальник может быть не всегда прав, но он всегда имеет право быть начальником:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-148" id="q148_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q148_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-148" id="q148_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q148_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-148" id="q148_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q148_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 149</h5>
                    <p class="card-text">Когда я думаю обо всем, что еще предстоит сделать, у меня появляется чувство напряженности:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-149" id="q149_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q149_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-149" id="q149_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q149_b">иногда</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-149" id="q149_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q149_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 150</h5>
                    <p class="card-text">Когда зрители мне что-либо кричат во время игры, меня это не трогает:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-150" id="q150_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q150_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-150" id="q150_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q150_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-150" id="q150_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q150_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 151</h5>
                    <p class="card-text">Интереснее быть:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-151" id="q151_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q151_a">художником</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-151" id="q151_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q151_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-151" id="q151_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q151_c">организатором культурных развлечений</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 152</h5>
                    <p class="card-text">Которое из следующих слов не относится к двум другим:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-152" id="q152_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q152_a">любые</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-152" id="q152_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q152_b">некоторые</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-152" id="q152_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q152_c">большинство</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 153</h5>
                    <p class="card-text">«Пламя» так относится к «жар», как «роза» относится к:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-153" id="q153_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q153_a">шип</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-153" id="q153_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q153_b">красивые лепестки</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-153" id="q153_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q153_c">аромат</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 154</h5>
                    <p class="card-text">У меня бывают яркие сновидения, мешающие мне спать:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-154" id="q154_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q154_a">часто</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-154" id="q154_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q154_b">иногда</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-154" id="q154_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q154_c">практически никогда</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 155</h5>
                    <p class="card-text">Если на пути к успеху стоят серьезные препятствия, я все-таки предпочитаю рискнуть:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-155" id="q155_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q155_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-155" id="q155_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q155_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-155" id="q155_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q155_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 156</h5>
                    <p class="card-text">Когда я нахожусь в группе людей, приступающих к какой-то работе, то само собой получается, что я оказываюсь во главе их:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-156" id="q156_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q156_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-156" id="q156_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q156_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-156" id="q156_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q156_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 157</h5>
                    <p class="card-text">Мне больше нравится в одежде спокойная корректность, чем бросающаяся в глаза индивидуальность:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-157" id="q157_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q157_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-157" id="q157_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q157_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-157" id="q157_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q157_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 158</h5>
                    <p class="card-text">Мне больше нравится провести вечер за спокойным любимым занятием, чем в оживленной компании:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-158" id="q158_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q158_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-158" id="q158_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q158_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-158" id="q158_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q158_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 159</h5>
                    <p class="card-text">Я не обращаю внимания на доброжелательные советы других, даже когда эти советы могли бы быть полезными:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-159" id="q159_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q159_a">иногда</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-159" id="q159_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q159_b">почти никогда</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-159" id="q159_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q159_c">никогда</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 160</h5>
                    <p class="card-text">В своих поступках я всегда стараюсь придерживаться общепринятых правил поведения:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-160" id="q160_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q160_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-160" id="q160_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q160_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-160" id="q160_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q160_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 161</h5>
                    <p class="card-text">Мне не очень нравится, когда смотрят, как я работаю:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-161" id="q161_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q161_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-161" id="q161_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q161_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-161" id="q161_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q161_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 162</h5>
                    <p class="card-text">Иногда приходится применять силу, потому что не всегда возможно добиться результата с помощью утверждения:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-162" id="q162_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q162_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-162" id="q162_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q162_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-162" id="q162_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q162_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 163</h5>
                    <p class="card-text">В школе я предпочитал (предпочитаю):</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-163" id="q163_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q163_a">русский язык и литературу</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-163" id="q163_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q163_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-163" id="q163_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q163_c">математику или арифметику</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 164</h5>
                    <p class="card-text">Меня иногда огорчало, что обо мне за глаза отзывались неодобрительно без всяких к этому причин:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-164" id="q164_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q164_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-164" id="q164_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q164_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-164" id="q164_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q164_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 165</h5>
                    <p class="card-text">Разговор с простыми людьми, которые всегда придерживаются общепринятых правил и традиций:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-165" id="q165_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q165_a">часто вполне интересен и содержателен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-165" id="q165_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q165_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-165" id="q165_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q165_c">раздражает меня, потому что ограничивается мелочами</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 166</h5>
                    <p class="card-text">Некоторые вещи настолько раздражают меня, что предпочитаю вообще не говорить на эти темы:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-166" id="q166_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q166_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-166" id="q166_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q166_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-166" id="q166_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q166_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 167</h5>
                    <p class="card-text">В воспитании важнее:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-167" id="q167_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q167_a">относиться к ребенку с достаточной любовью</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-167" id="q167_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q167_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-167" id="q167_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q167_c">выработать нужные привычки и отношение к жизни</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 168</h5>
                    <p class="card-text">Люди считают меня положительным, спокойным человеком, которого не трогают превратности судьбы:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-168" id="q168_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q168_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-168" id="q168_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q168_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-168" id="q168_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q168_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 169</h5>
                    <p class="card-text">Я считаю, что общество должно руководствоваться разумом и отбросить старые привычки или ненужные традиции:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-169" id="q169_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q169_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-169" id="q169_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q169_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-169" id="q169_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q169_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 170</h5>
                    <p class="card-text">Думаю, что в современном мире важнее разрешить:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-170" id="q170_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q170_a">вопросы нравственности</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-170" id="q170_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q170_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-170" id="q170_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q170_c">разногласия между странами мира</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 171</h5>
                    <p class="card-text">Я лучше усваиваю материал:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-171" id="q171_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q171_a">читая хорошо написанную книгу</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-171" id="q171_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q171_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-171" id="q171_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q171_c">участвуя в обсуждении вопроса</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 172</h5>
                    <p class="card-text">Я предпочитаю идти своим путем вместо того, чтобы действовать в соответствии с принятыми правилами:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-172" id="q172_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q172_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-172" id="q172_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q172_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-172" id="q172_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q172_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 173</h5>
                    <p class="card-text">Прежде чем выдвигать какой-либо аргумент, я предпочитаю подождать, пока не буду убежден, что я прав:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-173" id="q173_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q173_a">всегда</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-173" id="q173_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q173_b">обычно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-173" id="q173_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q173_c">только если это целесообразно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 174</h5>
                    <p class="card-text">Мелочи иногда невыносимо «действуют мне на нервы», хотя я и понимаю, что они не существенны:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-174" id="q174_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q174_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-174" id="q174_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q174_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-174" id="q174_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q174_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 175</h5>
                    <p class="card-text">Под влиянием момента я редко говорю вещи, о которых потом очень сожалею:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-175" id="q175_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q175_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-175" id="q175_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q175_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-175" id="q175_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q175_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 176</h5>
                    <p class="card-text">Если бы меня попросили участвовать в шефской деятельности, то я бы:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-176" id="q176_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q176_a">согласился</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-176" id="q176_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q176_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-176" id="q176_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q176_c">вежливо сказал, что занят</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 177</h5>
                    <p class="card-text">Которое из следующих слов не относится к двум другим:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-177" id="q177_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q177_a">широкий</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-177" id="q177_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q177_b">зигзагообразный</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-177" id="q177_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q177_c">прямой</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 178</h5>
                    <p class="card-text">«Скоро» так относится к «никогда», как «близко» к:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-178" id="q178_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q178_a">нигде</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-178" id="q178_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q178_b">далеко</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-178" id="q178_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q178_c">где-то</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 179</h5>
                    <p class="card-text">Если я невольно нарушил правила поведения, находясь в обществе, то я вскоре забываю об этом:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-179" id="q179_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q179_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-179" id="q179_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q179_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-179" id="q179_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q179_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 180</h5>
                    <p class="card-text">Меня считают человеком, которому обычно в голову приходят хорошие идеи, когда нужно разрешить какую-либо проблему:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-180" id="q180_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q180_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-180" id="q180_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q180_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-180" id="q180_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q180_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 181</h5>
                    <p class="card-text">Я способен лучше проявить себя:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-181" id="q181_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q181_a">в трудных ситуациях, когда нужно сохранить самообладание</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-181" id="q181_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q181_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-181" id="q181_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q181_c">когда требуется умение ладить с людьми</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 182</h5>
                    <p class="card-text">Меня считают человеком, полным энтузиазма:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-182" id="q182_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q182_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-182" id="q182_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q182_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-182" id="q182_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q182_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 183</h5>
                    <p class="card-text">Мне нравится работа, которая требует перемен, разнообразия, командировок, даже если она связана с некоторой опасностью:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-183" id="q183_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q183_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-183" id="q183_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q183_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-183" id="q183_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q183_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 184</h5>
                    <p class="card-text">Я довольно требовательный человек и всегда настаиваю на том, чтобы все делалось по возможности правильно:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-184" id="q184_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q184_a">верно</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-184" id="q184_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q184_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-184" id="q184_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q184_c">неверно</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 185</h5>
                    <p class="card-text">Мне нравится работа, требующая добросовестного отношения, точных навыков и умений:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-185" id="q185_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q185_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-185" id="q185_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q185_b">нечто среднее</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-185" id="q185_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q185_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 186</h5>
                    <p class="card-text">Я отношусь к типу энергичных людей, которые всегда заняты:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-186" id="q186_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q186_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-186" id="q186_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q186_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-186" id="q186_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q186_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="col qstyle">
            <div class="card border border-primary shadow">
                <div class="card-body">
                    <h5 class="card-title">Вопрос № 187</h5>
                    <p class="card-text">Я уверен в том, что не пропустил ни одного вопроса и на все ответил как следует:</p>
                    <div class="row">
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-187" id="q187_a" value="a">
                        <label class="btn btn-outline-primary w-100" for="q187_a">да</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-187" id="q187_b" value="b">
                        <label class="btn btn-outline-primary w-100" for="q187_b">не уверен</label>
                    </div>
                    <div class="col">
                        <input type="radio" class="btn-check" name="answer-187" id="q187_c" value="c">
                        <label class="btn btn-outline-primary w-100" for="q187_c">нет</label>
                    </div>
                    </div>
                </div>
            </div>
        </div>
            <button type="submit" id="submit_button" class="btn btn-primary w-100 my-2">Завершить тестирование</button>
        </form>
    </div>
</div>

<script src="../jquery-4.0.0.js"></script>

<script>
$('form').on('submit', function(e) {
    let hasError = false;
    for(let i = 1; i <= 187; i++) {
        let $radios = $('input[name="answer-' + i + '"]');
        if ($radios.filter(':checked').length === 0) {
            $radios.closest('.card').removeClass('border-primary').addClass('border-danger');
            hasError = true;
        }
    }
    
    if (hasError) {
        e.preventDefault();
    }
});
</script>

</body>
</html>