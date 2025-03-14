<?php
echo (pi()); // 3.1415926535898

echo (min(0, 150, 30, 20, -8, -200)); // -200
echo (max(0, 150, 30, 20, -8, -200)); // 150

echo (abs(-7)); // 7
echo (abs(-6.7)); // 6.7

echo (sqrt(64)); // 8

echo (round(0.60)); // 1
echo (round(0.49)); // 0
echo ceil(2.4559); // 3
echo floor(2.6455); // 2

echo (rand());
echo (rand(10, 100));

// generate 6 digit OTP (one time password)
echo rand(100000, 999999);

echo (pow(2, 4)); // 16
echo (pow(-2, 4)); // 16
echo (pow(-2, -4)); // 0.0625
echo (pow(-2, -3.2)); // NAN

?>