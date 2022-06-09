<?php
require 'functions.php';

//Kriteria 1 vs Kriteria 2
if ($_POST["k1vk2"] == "1") {
  $k12 = 1;
  $k21 = 1;
} elseif ($_POST["k1vk2"] == "2") {
  $k12 = 3;
  $k21 = 0.33;
} elseif ($_POST["k1vk2"] == "3") {
  $k12 = 0.33;
  $k21 = 3;
} elseif ($_POST["k1vk2"] == "4") {
  $k12 = 5;
  $k21 = 0.2;
} elseif ($_POST["k1vk2"] == "5") {
  $k12 = 0.2;
  $k21 = 5;
} elseif ($_POST["k1vk2"] == "6") {
  $k12 = 7;
  $k21 = 0.14;
} elseif ($_POST["k1vk2"] == "7") {
  $k12 = 0.14;
  $k21 = 7;
} elseif ($_POST["k1vk2"] == "8") {
  $k12 = 9;
  $k21 = 0.11;
} elseif ($_POST["k1vk2"] == "9") {
  $k12 = 0.11;
  $k21 = 9;
}
//kriteria1 vs kriteria3
if ($_POST["k1vk3"] == "1") {
  $k13 = 1;
  $k31 = 1;
} elseif ($_POST["k1vk3"] == "2") {
  $k13 = 3;
  $k31 = 0.33;
} elseif ($_POST["k1vk3"] == "3") {
  $k13 = 0.33;
  $k31 = 3;
} elseif ($_POST["k1vk3"] == "4") {
  $k13 = 5;
  $k31 = 0.2;
} elseif ($_POST["k1vk3"] == "5") {
  $k13 = 0.2;
  $k31 = 5;
} elseif ($_POST["k1vk3"] == "6") {
  $k13 = 7;
  $k31 = 0.14;
} elseif ($_POST["k1vk3"] == "7") {
  $k13 = 0.14;
  $k31 = 7;
} elseif ($_POST["k1vk3"] == "8") {
  $k13 = 9;
  $k31 = 0.11;
} elseif ($_POST["k1vk3"] == "9") {
  $k13 = 0.11;
  $k31 = 9;
}
//kriteria1 vs kriteria4
if ($_POST["k1vk4"] == "1") {
  $k14 = 1;
  $k41 = 1;
} elseif ($_POST["k1vk4"] == "2") {
  $k14 = 3;
  $k41 = 0.33;
} elseif ($_POST["k1vk4"] == "3") {
  $k14 = 0.33;
  $k41 = 3;
} elseif ($_POST["k1vk4"] == "4") {
  $k14 = 5;
  $k41 = 0.2;
} elseif ($_POST["k1vk4"] == "5") {
  $k14 = 0.2;
  $k41 = 5;
} elseif ($_POST["k1vk4"] == "6") {
  $k14 = 7;
  $k41 = 0.14;
} elseif ($_POST["k1vk4"] == "7") {
  $k14 = 0.14;
  $k41 = 7;
} elseif ($_POST["k1vk4"] == "8") {
  $k14 = 9;
  $k41 = 0.11;
} elseif ($_POST["k1vk4"] == "9") {
  $k14 = 0.11;
  $k41 = 9;
}
//kriteria1 vs kriteria5
if ($_POST["k1vk5"] == "1") {
  $k15 = 1;
  $k51 = 1;
} elseif ($_POST["k1vk5"] == "2") {
  $k15 = 3;
  $k51 = 0.33;
} elseif ($_POST["k1vk5"] == "3") {
  $k15 = 0.33;
  $k51 = 3;
} elseif ($_POST["k1vk5"] == "4") {
  $k15 = 5;
  $k51 = 0.2;
} elseif ($_POST["k1vk5"] == "5") {
  $k15 = 0.2;
  $k51 = 5;
} elseif ($_POST["k1vk5"] == "6") {
  $k15 = 7;
  $k51 = 0.14;
} elseif ($_POST["k1vk5"] == "7") {
  $k15 = 0.14;
  $k51 = 7;
} elseif ($_POST["k1vk5"] == "8") {
  $k15 = 9;
  $k51 = 0.11;
} elseif ($_POST["k1vk5"] == "9") {
  $k15 = 0.11;
  $k51 = 9;
}
//kriteria1 vs kriteria6
if ($_POST["k1vk6"] == "1") {
  $k16 = 1;
  $k61 = 1;
} elseif ($_POST["k1vk6"] == "2") {
  $k16 = 3;
  $k61 = 0.33;
} elseif ($_POST["k1vk6"] == "3") {
  $k16 = 0.33;
  $k61 = 3;
} elseif ($_POST["k1vk6"] == "4") {
  $k16 = 5;
  $k61 = 0.2;
} elseif ($_POST["k1vk6"] == "5") {
  $k16 = 0.2;
  $k61 = 5;
} elseif ($_POST["k1vk6"] == "6") {
  $k16 = 7;
  $k61 = 0.14;
} elseif ($_POST["k1vk6"] == "7") {
  $k16 = 0.14;
  $k61 = 7;
} elseif ($_POST["k1vk6"] == "8") {
  $k16 = 9;
  $k61 = 0.11;
} elseif ($_POST["k1vk6"] == "9") {
  $k16 = 0.11;
  $k61 = 9;
}
//kriteria1 vs kriteria7
if ($_POST["k1vk7"] == "1") {
  $k17 = 1;
  $k71 = 1;
} elseif ($_POST["k1vk7"] == "2") {
  $k17 = 3;
  $k71 = 0.33;
} elseif ($_POST["k1vk7"] == "3") {
  $k17 = 0.33;
  $k71 = 3;
} elseif ($_POST["k1vk7"] == "4") {
  $k17 = 5;
  $k71 = 0.2;
} elseif ($_POST["k1vk7"] == "5") {
  $k17 = 0.2;
  $k71 = 5;
} elseif ($_POST["k1vk7"] == "6") {
  $k17 = 7;
  $k71 = 0.14;
} elseif ($_POST["k1vk7"] == "7") {
  $k17 = 0.14;
  $k71 = 7;
} elseif ($_POST["k1vk7"] == "8") {
  $k17 = 9;
  $k71 = 0.11;
} elseif ($_POST["k1vk7"] == "9") {
  $k17 = 0.11;
  $k71 = 9;
}
//kriteria2 vs kriteria3
if ($_POST["k2vk3"] == "1") {
  $k23 = 1;
  $k32 = 1;
} elseif ($_POST["k2vk3"] == "2") {
  $k23 = 3;
  $k32 = 0.33;
} elseif ($_POST["k2vk3"] == "3") {
  $k23 = 0.33;
  $k32 = 3;
} elseif ($_POST["k2vk3"] == "4") {
  $k23 = 5;
  $k32 = 0.2;
} elseif ($_POST["k2vk3"] == "5") {
  $k23 = 0.2;
  $k32 = 5;
} elseif ($_POST["k2vk3"] == "6") {
  $k23 = 7;
  $k32 = 0.14;
} elseif ($_POST["k2vk3"] == "7") {
  $k23 = 0.14;
  $k32 = 7;
} elseif ($_POST["k2vk3"] == "8") {
  $k23 = 9;
  $k32 = 0.11;
} elseif ($_POST["k2vk3"] == "9") {
  $k23 = 0.11;
  $k32 = 9;
}
//kriteria2 vs kriteria4
if ($_POST["k2vk4"] == "1") {
  $k24 = 1;
  $k42 = 1;
} elseif ($_POST["k2vk4"] == "2") {
  $k24 = 3;
  $k42 = 0.33;
} elseif ($_POST["k2vk4"] == "3") {
  $k24 = 0.33;
  $k42 = 3;
} elseif ($_POST["k2vk4"] == "4") {
  $k24 = 5;
  $k42 = 0.2;
} elseif ($_POST["k2vk4"] == "5") {
  $k24 = 0.2;
  $k42 = 5;
} elseif ($_POST["k2vk4"] == "6") {
  $k24 = 7;
  $k42 = 0.14;
} elseif ($_POST["k2vk4"] == "7") {
  $k24 = 0.14;
  $k42 = 7;
} elseif ($_POST["k2vk4"] == "8") {
  $k24 = 9;
  $k42 = 0.11;
} elseif ($_POST["k2vk4"] == "9") {
  $k24 = 0.11;
  $k42 = 9;
}
//kriteria2 vs kriteria5
if ($_POST["k2vk5"] == "1") {
  $k25 = 1;
  $k52 = 1;
} elseif ($_POST["k2vk5"] == "2") {
  $k25 = 3;
  $k52 = 0.33;
} elseif ($_POST["k2vk5"] == "3") {
  $k25 = 0.33;
  $k52 = 3;
} elseif ($_POST["k2vk5"] == "4") {
  $k25 = 5;
  $k52 = 0.2;
} elseif ($_POST["k2vk5"] == "5") {
  $k25 = 0.2;
  $k52 = 5;
} elseif ($_POST["k2vk5"] == "6") {
  $k25 = 7;
  $k52 = 0.14;
} elseif ($_POST["k2vk5"] == "7") {
  $k25 = 0.14;
  $k52 = 7;
} elseif ($_POST["k2vk5"] == "8") {
  $k25 = 9;
  $k52 = 0.11;
} elseif ($_POST["k2vk5"] == "9") {
  $k25 = 0.11;
  $k52 = 9;
}
//kriteria2 vs kriteria6
if ($_POST["k2vk6"] == "1") {
  $k26 = 1;
  $k62 = 1;
} elseif ($_POST["k2vk6"] == "2") {
  $k26 = 3;
  $k62 = 0.33;
} elseif ($_POST["k2vk6"] == "3") {
  $k26 = 0.33;
  $k62 = 3;
} elseif ($_POST["k2vk6"] == "4") {
  $k26 = 5;
  $k62 = 0.2;
} elseif ($_POST["k2vk6"] == "5") {
  $k26 = 0.2;
  $k62 = 5;
} elseif ($_POST["k2vk6"] == "6") {
  $k26 = 7;
  $k62 = 0.14;
} elseif ($_POST["k2vk6"] == "7") {
  $k26 = 0.14;
  $k62 = 7;
} elseif ($_POST["k2vk6"] == "8") {
  $k26 = 9;
  $k62 = 0.11;
} elseif ($_POST["k2vk6"] == "9") {
  $k26 = 0.11;
  $k62 = 9;
}
//kriteria2 vs kriteria7
if ($_POST["k2vk7"] == "1") {
  $k27 = 1;
  $k72 = 1;
} elseif ($_POST["k2vk7"] == "2") {
  $k27 = 3;
  $k72 = 0.33;
} elseif ($_POST["k2vk7"] == "3") {
  $k27 = 0.33;
  $k72 = 3;
} elseif ($_POST["k2vk7"] == "4") {
  $k27 = 5;
  $k72 = 0.2;
} elseif ($_POST["k2vk7"] == "5") {
  $k27 = 0.2;
  $k72 = 5;
} elseif ($_POST["k2vk7"] == "6") {
  $k27 = 7;
  $k72 = 0.14;
} elseif ($_POST["k2vk7"] == "7") {
  $k27 = 0.14;
  $k72 = 7;
} elseif ($_POST["k2vk7"] == "8") {
  $k27 = 9;
  $k72 = 0.11;
} elseif ($_POST["k2vk7"] == "9") {
  $k27 = 0.11;
  $k72 = 9;
}
//kriteria3 vs kriteria4
if ($_POST["k3vk4"] == "1") {
  $k34 = 1;
  $k43 = 1;
} elseif ($_POST["k3vk4"] == "2") {
  $k34 = 3;
  $k43 = 0.33;
} elseif ($_POST["k3vk4"] == "3") {
  $k34 = 0.33;
  $k43 = 3;
} elseif ($_POST["k3vk4"] == "4") {
  $k34 = 5;
  $k43 = 0.2;
} elseif ($_POST["k3vk4"] == "5") {
  $k34 = 0.2;
  $k43 = 5;
} elseif ($_POST["k3vk4"] == "6") {
  $k34 = 7;
  $k43 = 0.14;
} elseif ($_POST["k3vk4"] == "7") {
  $k34 = 0.14;
  $k43 = 7;
} elseif ($_POST["k3vk4"] == "8") {
  $k34 = 9;
  $k43 = 0.11;
} elseif ($_POST["k3vk4"] == "9") {
  $k34 = 0.11;
  $k43 = 9;
}
//kriteria3 vs kriteria5
if ($_POST["k3vk5"] == "1") {
  $k35 = 1;
  $k53 = 1;
} elseif ($_POST["k3vk5"] == "2") {
  $k35 = 3;
  $k53 = 0.33;
} elseif ($_POST["k3vk5"] == "3") {
  $k35 = 0.33;
  $k53 = 3;
} elseif ($_POST["k3vk5"] == "4") {
  $k35 = 5;
  $k53 = 0.2;
} elseif ($_POST["k3vk5"] == "5") {
  $k35 = 0.2;
  $k53 = 5;
} elseif ($_POST["k3vk5"] == "6") {
  $k35 = 7;
  $k53 = 0.14;
} elseif ($_POST["k3vk5"] == "7") {
  $k35 = 0.14;
  $k53 = 7;
} elseif ($_POST["k3vk5"] == "8") {
  $k35 = 9;
  $k53 = 0.11;
} elseif ($_POST["k3vk5"] == "9") {
  $k35 = 0.11;
  $k53 = 9;
}
//kriteria3 vs kriteria6
if ($_POST["k3vk6"] == "1") {
  $k36 = 1;
  $k63 = 1;
} elseif ($_POST["k3vk6"] == "2") {
  $k36 = 3;
  $k63 = 0.33;
} elseif ($_POST["k3vk6"] == "3") {
  $k36 = 0.33;
  $k63 = 3;
} elseif ($_POST["k3vk6"] == "4") {
  $k36 = 5;
  $k63 = 0.2;
} elseif ($_POST["k3vk6"] == "5") {
  $k36 = 0.2;
  $k63 = 5;
} elseif ($_POST["k3vk6"] == "6") {
  $k36 = 7;
  $k63 = 0.14;
} elseif ($_POST["k3vk6"] == "7") {
  $k36 = 0.14;
  $k63 = 7;
} elseif ($_POST["k3vk6"] == "8") {
  $k36 = 9;
  $k63 = 0.11;
} elseif ($_POST["k3vk6"] == "9") {
  $k36 = 0.11;
  $k63 = 9;
}
//k3 vs k7
if ($_POST["k3vk7"] == "1") {
  $k37 = 1;
  $k73 = 1;
} elseif ($_POST["k3vk7"] == "2") {
  $k37 = 3;
  $k73 = 0.33;
} elseif ($_POST["k3vk7"] == "3") {
  $k37 = 0.33;
  $k73 = 3;
} elseif ($_POST["k3vk7"] == "4") {
  $k37 = 5;
  $k73 = 0.2;
} elseif ($_POST["k3vk7"] == "5") {
  $k37 = 0.2;
  $k73 = 5;
} elseif ($_POST["k3vk7"] == "6") {
  $k37 = 7;
  $k73 = 0.14;
} elseif ($_POST["k3vk7"] == "7") {
  $k37 = 0.14;
  $k73 = 7;
} elseif ($_POST["k3vk7"] == "8") {
  $k37 = 9;
  $k73 = 0.11;
} elseif ($_POST["k3vk7"] == "9") {
  $k37 = 0.11;
  $k73 = 9;
}
//k4 vs k5
if ($_POST["k4vk5"] == "1") {
  $k45 = 1;
  $k54 = 1;
} elseif ($_POST["k4vk5"] == "2") {
  $k45 = 3;
  $k54 = 0.33;
} elseif ($_POST["k4vk5"] == "3") {
  $k45 = 0.33;
  $k54 = 3;
} elseif ($_POST["k4vk5"] == "4") {
  $k45 = 5;
  $k54 = 0.2;
} elseif ($_POST["k4vk5"] == "5") {
  $k45 = 0.2;
  $k54 = 5;
} elseif ($_POST["k4vk5"] == "6") {
  $k45 = 7;
  $k54 = 0.14;
} elseif ($_POST["k4vk5"] == "7") {
  $k45 = 0.14;
  $k54 = 7;
} elseif ($_POST["k4vk5"] == "8") {
  $k45 = 9;
  $k54 = 0.11;
} elseif ($_POST["k4vk5"] == "9") {
  $k45 = 0.11;
  $k54 = 9;
}
//k4 vs k6
if ($_POST["k4vk6"] == "1") {
  $k46 = 1;
  $k64 = 1;
} elseif ($_POST["k4vk6"] == "2") {
  $k46 = 3;
  $k64 = 0.33;
} elseif ($_POST["k4vk6"] == "3") {
  $k46 = 0.33;
  $k64 = 3;
} elseif ($_POST["k4vk6"] == "4") {
  $k46 = 5;
  $k64 = 0.2;
} elseif ($_POST["k4vk6"] == "5") {
  $k46 = 0.2;
  $k64 = 5;
} elseif ($_POST["k4vk6"] == "6") {
  $k46 = 7;
  $k64 = 0.14;
} elseif ($_POST["k4vk6"] == "7") {
  $k46 = 0.14;
  $k64 = 7;
} elseif ($_POST["k4vk6"] == "8") {
  $k46 = 9;
  $k64 = 0.11;
} elseif ($_POST["k4vk6"] == "9") {
  $k46 = 0.11;
  $k64 = 9;
}
//k4 vs k7
if ($_POST["k4vk7"] == "1") {
  $k47 = 1;
  $k74 = 1;
} elseif ($_POST["k4vk7"] == "2") {
  $k47 = 3;
  $k74 = 0.33;
} elseif ($_POST["k4vk7"] == "3") {
  $k47 = 0.33;
  $k74 = 3;
} elseif ($_POST["k4vk7"] == "4") {
  $k47 = 5;
  $k74 = 0.2;
} elseif ($_POST["k4vk7"] == "5") {
  $k47 = 0.2;
  $k74 = 5;
} elseif ($_POST["k4vk7"] == "6") {
  $k47 = 7;
  $k74 = 0.14;
} elseif ($_POST["k4vk7"] == "7") {
  $k47 = 0.14;
  $k74 = 7;
} elseif ($_POST["k4vk7"] == "8") {
  $k47 = 9;
  $k74 = 0.11;
} elseif ($_POST["k4vk7"] == "9") {
  $k47 = 0.11;
  $k74 = 9;
}
//k5 vs k6
if ($_POST["k5vk6"] == "1") {
  $k56 = 1;
  $k65 = 1;
} elseif ($_POST["k5vk6"] == "2") {
  $k56 = 3;
  $k65 = 0.33;
} elseif ($_POST["k5vk6"] == "3") {
  $k56 = 0.33;
  $k65 = 3;
} elseif ($_POST["k5vk6"] == "4") {
  $k56 = 5;
  $k65 = 0.2;
} elseif ($_POST["k5vk6"] == "5") {
  $k56 = 0.2;
  $k65 = 5;
} elseif ($_POST["k5vk6"] == "6") {
  $k56 = 7;
  $k65 = 0.14;
} elseif ($_POST["k5vk6"] == "7") {
  $k56 = 0.14;
  $k65 = 7;
} elseif ($_POST["k5vk6"] == "8") {
  $k56 = 9;
  $k65 = 0.11;
} elseif ($_POST["k5vk6"] == "9") {
  $k56 = 0.11;
  $k65 = 9;
}
//k5 vs k7
if ($_POST["k5vk7"] == "1") {
  $k57 = 1;
  $k75 = 1;
} elseif ($_POST["k5vk7"] == "2") {
  $k57 = 3;
  $k75 = 0.33;
} elseif ($_POST["k5vk7"] == "3") {
  $k57 = 0.33;
  $k75 = 3;
} elseif ($_POST["k5vk7"] == "4") {
  $k57 = 5;
  $k75 = 0.2;
} elseif ($_POST["k5vk7"] == "5") {
  $k57 = 0.2;
  $k75 = 5;
} elseif ($_POST["k5vk7"] == "6") {
  $k57 = 7;
  $k75 = 0.14;
} elseif ($_POST["k5vk7"] == "7") {
  $k57 = 0.14;
  $k75 = 7;
} elseif ($_POST["k5vk7"] == "8") {
  $k57 = 9;
  $k75 = 0.11;
} elseif ($_POST["k5vk7"] == "9") {
  $k57 = 0.11;
  $k75 = 9;
}
//k6 vs k7
if ($_POST["k6vk7"] == "1") {
  $k67 = 1;
  $k76 = 1;
} elseif ($_POST["k6vk7"] == "2") {
  $k67 = 3;
  $k76 = 0.33;
} elseif ($_POST["k6vk7"] == "3") {
  $k67 = 0.33;
  $k76 = 3;
} elseif ($_POST["k6vk7"] == "4") {
  $k67 = 5;
  $k76 = 0.2;
} elseif ($_POST["k6vk7"] == "5") {
  $k67 = 0.2;
  $k76 = 5;
} elseif ($_POST["k6vk7"] == "6") {
  $k67 = 7;
  $k76 = 0.14;
} elseif ($_POST["k6vk7"] == "7") {
  $k67 = 0.14;
  $k76 = 7;
} elseif ($_POST["k6vk7"] == "8") {
  $k67 = 9;
  $k76 = 0.11;
} elseif ($_POST["k6vk7"] == "9") {
  $k67 = 0.11;
  $k76 = 9;
}

$matrixPerbandingan = [
  [1, $k12, $k13, $k14, $k15, $k16, $k17],
  [$k21, 1, $k23, $k24, $k25, $k26, $k27],
  [$k31, $k32, 1, $k34, $k35, $k36, $k37],
  [$k41, $k42, $k43, 1, $k45, $k46, $k47],
  [$k51, $k52, $k53, $k54, 1, $k56, $k57],
  [$k61, $k62, $k63, $k64, $k65, 1, $k67],
  [$k71, $k72, $k73, $k74, $k75, $k76, 1]
];
$objAHP = new AHP();

//1. Tabel matrix perbandingan berpasangan kriteria

$jumKol1 = $objAHP->jumlahKolomKriteria($matrixPerbandingan, 0);
$jumKol2 = $objAHP->jumlahKolomKriteria($matrixPerbandingan, 1);
$jumKol3 = $objAHP->jumlahKolomKriteria($matrixPerbandingan, 2);
$jumKol4 = $objAHP->jumlahKolomKriteria($matrixPerbandingan, 3);
$jumKol5 = $objAHP->jumlahKolomKriteria($matrixPerbandingan, 4);
$jumKol6 = $objAHP->jumlahKolomKriteria($matrixPerbandingan, 5);
$jumKol7 = $objAHP->jumlahKolomKriteria($matrixPerbandingan, 6);

//2. Normalisasi nilai matrix perbandingan berpasangan kriteria
$matrixNormaliasi = $objAHP->normalisasi($matrixPerbandingan, $jumKol1, $jumKol2, $jumKol3, $jumKol4, $jumKol5, $jumKol6, $jumKol7);

$jumKolN1 = $objAHP->jumlahKolomKriteria($matrixNormaliasi, 0);
$jumKolN2 = $objAHP->jumlahKolomKriteria($matrixNormaliasi, 1);
$jumKolN3 = $objAHP->jumlahKolomKriteria($matrixNormaliasi, 2);
$jumKolN4 = $objAHP->jumlahKolomKriteria($matrixNormaliasi, 3);
$jumKolN5 = $objAHP->jumlahKolomKriteria($matrixNormaliasi, 4);
$jumKolN6 = $objAHP->jumlahKolomKriteria($matrixNormaliasi, 5);
$jumKolN7 = $objAHP->jumlahKolomKriteria($matrixNormaliasi, 6);

$jumBarN1 = $objAHP->jumlahBarisKriteria($matrixNormaliasi, 0);
$jumBarN2 = $objAHP->jumlahBarisKriteria($matrixNormaliasi, 1);
$jumBarN3 = $objAHP->jumlahBarisKriteria($matrixNormaliasi, 2);
$jumBarN4 = $objAHP->jumlahBarisKriteria($matrixNormaliasi, 3);
$jumBarN5 = $objAHP->jumlahBarisKriteria($matrixNormaliasi, 4);
$jumBarN6 = $objAHP->jumlahBarisKriteria($matrixNormaliasi, 5);
$jumBarN7 = $objAHP->jumlahBarisKriteria($matrixNormaliasi, 6);

//3. hasil nilai bobot tiap kriteria/mencari rata rata tiap baris normaliasi
$w1 = $objAHP->bobotKriteria($jumBarN1);
$w2 = $objAHP->bobotKriteria($jumBarN2);
$w3 = $objAHP->bobotKriteria($jumBarN3);
$w4 = $objAHP->bobotKriteria($jumBarN4);
$w5 = $objAHP->bobotKriteria($jumBarN5);
$w6 = $objAHP->bobotKriteria($jumBarN6);
$w7 = $objAHP->bobotKriteria($jumBarN7);

//4. perhitungan Konsistensi
$CR = $objAHP->Konsistensi($jumKol1, $jumKol2, $jumKol3, $jumKol4, $jumKol5, $jumKol6, $jumKol7, $w1, $w2, $w3, $w4, $w5, $w6, $w7);
if ($CR > 0.1) {
  header("Location: index.php?tidakKonsisten=true");
}

// ----------------------------------------------------Tahap Perangkingan TOPSIS--------------------------------------------------------
$objTOPSIS = new TOPSIS();
$jum = 0;
$Laptop = $objTOPSIS->query("SELECT id, alternatif, layar, processor, ram, harddisk,
                            gpuvram, berat, harga  FROM laptops");

//1. membuat matrix keputusan yang ternormalisasi
$x1 = $objTOPSIS->getX($Laptop, 2);
$x2 = $objTOPSIS->getX($Laptop, 3);
$x3 = $objTOPSIS->getX($Laptop, 4);
$x4 = $objTOPSIS->getX($Laptop, 5);
$x5 = $objTOPSIS->getX($Laptop, 6);
$x6 = $objTOPSIS->getX($Laptop, 7);
$x7 = $objTOPSIS->getX($Laptop, 8);

$matrixAltNorm = $objTOPSIS->normalisasi($Laptop, $x1, $x2, $x3, $x4, $x5, $x6, $x7);
//2. membuat matrix keputusan ternormalisasi terbobot
$matrixNormTerbobot = $objTOPSIS->normalisasiTerbobot($matrixAltNorm, $w1, $w2, $w3, $w4, $w5, $w6, $w7);

//3. Menentukan matrix solusi ideal positif dan negatif
$matrixSolusiIdeal = $objTOPSIS->solusiIdeal($matrixNormTerbobot);

//4. Menentukan jarak antara nilai setiap alternatif dengan matrix solusi ideal positif dan negatif
$index = count($matrixNormTerbobot);
for ($i = 0; $i < $index; $i++) {
  $dPlus[] = $objTOPSIS->jarakSolusiIdealPos($matrixNormTerbobot, $matrixSolusiIdeal, $i);
  $dNeg[] = $objTOPSIS->jarakSolusiIdealNeg($matrixNormTerbobot, $matrixSolusiIdeal, $i);
}

//5. Menentukan nilai preferensi untuk setiap alternatif
$V = $objTOPSIS->nilaiPref($dPlus, $dNeg);
//meyimpan hasil ke dalam database
$objCrud = new dataCrud();
$g = 0;
$h = 1;
foreach ($Laptop as $laptops) {
  $simpan = mysqli_query($objCrud->getKoneksi(), "UPDATE laptops SET V = '$V[$g]' WHERE id  = '$h'");
  $g++;
  $h++;
}
$hasil = $objTOPSIS->query("SELECT alternatif, layar, processor, ram, harddisk, gpuvram, berat, FORMAT(harga, 0) FROM laptops ORDER BY V DESC");
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Laptop Ranks</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
  <link rel="stylesheet" href="assets/style.css">
</head>

<body>
  <!-- Navbar -->
  <nav class="navbar navbar-expand navbar-light pt-2 pb-2 bg-white sticky-xl-top">
    <div class="container">
      <a href="index.php"><img src="assets/Logo/LaptopRanks.png" alt="LaptopRanksLogo" draggable="false" width="150" /></a>
      <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav ms-auto align-items-center">
          <li class="nav-item ms-3">
            <a class="btn btn-black btn-rounded" href="login.php">Login</a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
  <!-- Akhir Navbar -->

  <!-- Jumbotron -->
  <section class="pt-2 pb-3 text-light bg-danger shadow">
    <div class="container">
      <h1 class="display-4">
        <p class="fw-semibold">Hasil Ranking</p>
      </h1>
      <p class="lead fw-semibold">Ranking Laptop berdasarkan preferensi</p>
    </div>
  </section>
  <!-- Akhir Jumbotron -->

  <!-- Main -->
  <div class="main text-center">
      <h3 class="pt-3 pb-3">Hasil Urutan Peringkat Laptop Yang Cocok Untuk Anda</h3>
      <div class="table-container table-responsive">
        <table class="table table-hover">
          <?php $noUrut = 1; ?>
          <thead class="table-dark sticky-top">
            <tr>
              <th> RANKS </th>
              <th> Alternatif </th>
              <th> Layar (Inch) </th>
              <th> Processor Speed (GHz) </th>
              <th> RAM (GB) </th>
              <th> Harddisk (GB) </th>
              <th> GPU VRAM (gb) </th>
              <th> Berat (KG) </th>
              <th> Harga (Rp) </th>
            </tr>
          </thead>
          <tbody>
            <?php foreach ($hasil as $a): ?>
              <tr>
                <td> <?= $noUrut; ?> </td>
                <?php foreach ($a as $b): ?>
                  <td> <?= $b; ?> </td>
                <?php endforeach; ?>
              </tr>
              <?php $noUrut++; ?>
            <?php endforeach; ?>
          </tbody>
        </table>
      </div>
    </div>
  <!-- Akhir Main -->

  <!-- Footer -->
  <footer class="text-center bg-danger text-light fw-bold pt-2 pb-5">
    <p>Created by <a href="https://github.com/tantrahara" class="text-white">Hara Tantra</a></p>
  </footer>
  <!-- Akhir Footer -->

</body>

</html>
