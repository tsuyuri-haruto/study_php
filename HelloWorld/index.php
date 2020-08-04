    <?php
    define("MAX", 555);
    const MESSAGE_EVENING = "こんばんは";
    const MESSAGE_MORNING = "おはようございます";
    const HTML_LINE_BREAK = '<br>';
    $message = "こんにちは";
    echo $message;
    echo HTML_LINE_BREAK;
    $message = MESSAGE_EVENING;
    echo $message;
    const HTML_HORIZONTAL_RULE = '<hr>';
    echo HTML_HORIZONTAL_RULE;
    const TAB = "\n";
    $tab = "\n";
    print(MAX);
    echo $tab . "おはよう";
    // $variableを数値型(int)として使うために初期化
    $variable = 0;
    // 足し算：+ 引き算：- 掛け算：* 割り算：/
    $variable = 50 + 50;
    echo "今の\$variableの内容は「{$variable}」です。" . $tab;
    $variable = $variable - 50;
    echo "今の\$variableの内容は「{$variable}」です。" . $tab;
    $variable = $variable * 2;
    echo "今の\$variableの内容は「{$variable}」です。" . $tab;
    $variable = $variable / 2;
    echo "今の\$variableの内容は「{$variable}」です。" . $tab;
    $variable = 53;
    $message = "\$variable : {$variable} は,";
    switch ($variable) {
        default:
            $post_script = "デフォルト説明文";
            echo $post_script;
        case $variable > 50:
            $message = $message . "50より大きいです";
            echo $message . $tab;
            break;
        case $variable > 10:
            $message = $message . "10より大きいです";
            echo $message . $tab;
            break;
    }
    $myAge = 82;
    $myScore = 88;
    rankDecision($myScore);
    ageMeasurement($myAge);
    function ageMeasurement($age)
    {
        switch (floor($age / 10)) {

            case 5:
                echo "あなたは50代です" . TAB;
                break;
            case 6:
                echo "あなたは60代です" . TAB;
                break;
            case 7:
                echo "あなたは70代です" . TAB;
                break;
            case 8:
                echo "あなたは80代です" . TAB;
                break;
            case 9:
                echo "あなたは90代です" . TAB;
                break;
            default:
                echo "あなたは半世紀も生きてません、50歳以下です" . TAB;
        }
    }
    function rankDecision($score)
    {
        switch (floor($score / 20)) {
            case 2:
                echo "your rank is C" . TAB;
                break;
            case 3:
                echo "your rank is B" . TAB;
                break;
            case 4:
                echo "your rank is A" . TAB;
                break;
            case 5:
                echo "your rank is A+, perfect!" . TAB;
                break;
            default:
                echo "your rank is D, you have to study" . TAB;
        }
    }
    class CheckMyRankOrAge
    {
        public $age;
        public $score;

        public function __construct($age, $score)
        {
            $this->score = $score;
            $this->age = $age;
        }
        function ageMeasurement()
        {
            switch (floor($this->age / 10)) {

                case 5:
                    echo "あなたは50代です" . TAB;
                    break;
                case 6:
                    echo "あなたは60代です" . TAB;
                    break;
                case 7:
                    echo "あなたは70代です" . TAB;
                    break;
                case 8:
                    echo "あなたは80代です" . TAB;
                    break;
                case 9:
                    echo "あなたは90代です" . TAB;
                    break;
                default:
                    echo "あなたは半世紀も生きてません、50歳以下です" . TAB;
            }
        }
        function rankDecision()
        {
            switch (floor($this->score / 20)) {
                case 2:
                    echo "your rank is C" . TAB;
                    break;
                case 3:
                    echo "your rank is B" . TAB;
                    break;
                case 4:
                    echo "your rank is A" . TAB;
                    break;
                case 5:
                    echo "your rank is A+, perfect!" . TAB;
                    break;
                default:
                    echo "your rank is D, you have to study" . TAB;
            }
        }
    }
    class BMICalculation
    {
        public $height;
        public $bodyWeight;

        public function __construct($height, $bodyWeight)
        {
            $this->height = $height;
            $this->bodyWeight = $bodyWeight;
        }

        public function getBMI()
        {
            $heights = $this->height;
            $bodyWeights = $this->bodyWeight;
            $result = round($bodyWeights / pow($heights / 100, 2), 1);
            echo $result;
        }
    }

    $armin = new BMICalculation(170, 66);
    echo $armin->getBMI();

    class User
    {
        public $name;
        public $test = "テスト";
        public function __construct($name)
        {
            $this->name = $name;
        }
        // //final→override禁止
        // final public function sayHi() {
        public function sayHi()
        {
            echo "hi, i am $this->name!";
        }
    }
    $tom = new User("tom");
    $tom->sayHi();
    $anny = new CheckMyRankOrAge(45, 99);
    echo $anny->rankDecision();
    ?>
