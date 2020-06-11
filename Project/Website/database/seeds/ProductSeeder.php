<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ProductSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        if(DB::table('product')->get()->count() == 0){
            DB::table('product')->insert([
                [
                    'ProductName' => 'Apple iPhone SE 2020 Single Sim 64GB black',
                    'Id_Brand' => 1,
                    'Id_Category' => 1,
                    'Price' => 1699,
                    'Discount' => 1,
                    'Content' => '
                    მწარმოებელი
                    ბრენდი:
                    Apple
                    წარმოება
                    გამოშვების თარიღი:
                    2020
                    კომუნიკაცია
                    ტექნოლოგია:
                    GSM / CDMA / HSPA / EVDO / LTE
                    კავშირის სტანდარტი:
                    4G
                    კორპუსი
                    მობილურის ტიპი:
                    Smartphone
                    ზომები:
                    138.4 x 67.3 x 7.3 mm
                    წონა:
                    148 g
                    კორპუსის აწყობა:
                    aluminum frame
                    სიმ ბარათი-SIM:
                    Single SIM
                    სიმ ბარათი-SIM ტიპი:
                    Nano-SIM
                    კორპუსის დაცვა:
                    IP67, Dust/water resistant (up to 1m for 30 mins)
                    ეკრანი
                    ეკრანის ტიპი:
                    capacitive touchscreen, 16M colors
                    ეკრანის ზომა:
                    4.7 inches
                    ეკრანის ზედაპირი:
                    60.9 cm2 (~65.4% screen-to-body ratio)
                    ეკრანის გაფართოება:
                    750X1334 Pixels
                    ეკრანის ფორმატი:
                    16:9 ratio, (~326 ppi density)
                    მულტიტაჩი:
                    Yes
                    ეკრანის დაცვა:
                    Ion-strengthened glass
                    პლატფორმა
                    ჩიპსეტი:
                    Apple A13 Bionic
                    პროცესორი:
                    Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)
                    გრაფიკული პროცესორი:
                    Apple GPU (4-core graphics)
                    შიდა მეხსიერება:
                    64 GB
                    ოპერატიული მეხსიერება:
                    3 GB
                    კამერა
                    მთავარი კამერის ტიპი:
                    Single
                    მთავარი კამერა:
                    12 MP
                    N1 კამერა:
                    12 MP, f/1.8, 28mm (wide), OIS, PDAF
                    ვიდეო:
                    2160p@24/30/60fps, 1080p@30/60/120/240fps
                    დამატებითი თვისებები:
                    dual-tone flash, HDR
                    სელფი კამერა
                    სელფი კამერის ტიპი:
                    Single
                    სელფი კამერა:
                    7 MP
                    N1 კამერა:
                    7 MP, f/2.2, 32mm
                    ვიდეო:
                    1080p@30fps
                    დამატებითი თვისებები:
                    Face detection, HDR, panorama
                    კავშირი
                    WLAN:
                    Wi-Fi 802.11, Dual-band, Hotspot, Wi-Fi Direct
                    Bluetooth:
                    5.0, A2DP, LE
                    GPS:
                    Yes, with A-GPS, GLONASS, GALILEO
                    FM-რადიო:
                    NO
                    USB პორტი:
                    Lightning
                    3.5mm პორტი:
                    NO
                    Wireless დატენვა:
                    YES
                    სენსორები
                    თითის ანაბეჭდი:
                    Front-mounted
                    სახის ამომცნობი:
                    NO
                    ელემენტი
                    ელემენტის ტიპი:
                    Non-removable
                    ზომა mAh:
                    Li-ion 1821 mAh
                    ',
                    'Photo' => 'Apple_Smartphone_1',

                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'ProductName' => ' Apple iPhone SE 2020 Single Sim 64GB red',
                    'Id_Brand' => 1,
                    'Id_Category' => 1,
                    'Price' => 1799,
                    'Discount' => 1,
                    'Content' => '
                    მწარმოებელი
                    ბრენდი:
                    Apple
                    წარმოება
                    გამოშვების თარიღი:
                    2020
                    კომუნიკაცია
                    ტექნოლოგია:
                    GSM / CDMA / HSPA / EVDO / LTE
                    კავშირის სტანდარტი:
                    4G
                    კორპუსი
                    მობილურის ტიპი:
                    Smartphone
                    ზომები:
                    138.4 x 67.3 x 7.3 mm
                    წონა:
                    148 g
                    კორპუსის აწყობა:
                    aluminum frame
                    სიმ ბარათი-SIM:
                    Single SIM
                    სიმ ბარათი-SIM ტიპი:
                    Nano-SIM
                    კორპუსის დაცვა:
                    IP67, Dust/water resistant (up to 1m for 30 mins)
                    ეკრანი
                    ეკრანის ტიპი:
                    capacitive touchscreen, 16M colors
                    ეკრანის ზომა:
                    4.7 inches
                    ეკრანის ზედაპირი:
                    60.9 cm2 (~65.4% screen-to-body ratio)
                    ეკრანის გაფართოება:
                    750X1334 Pixels
                    ეკრანის ფორმატი:
                    16:9 ratio, (~326 ppi density)
                    მულტიტაჩი:
                    Yes
                    ეკრანის დაცვა:
                    Ion-strengthened glass
                    პლატფორმა
                    ჩიპსეტი:
                    Apple A13 Bionic
                    პროცესორი:
                    Hexa-core (2x2.65 GHz Lightning + 4x1.8 GHz Thunder)
                    გრაფიკული პროცესორი:
                    Apple GPU (4-core graphics)
                    შიდა მეხსიერება:
                    64 GB
                    ოპერატიული მეხსიერება:
                    3 GB
                    კამერა
                    მთავარი კამერის ტიპი:
                    Single
                    მთავარი კამერა:
                    12 MP
                    N1 კამერა:
                    12 MP, f/1.8, 28mm (wide), OIS, PDAF
                    ვიდეო:
                    2160p@24/30/60fps, 1080p@30/60/120/240fps
                    დამატებითი თვისებები:
                    dual-tone flash, HDR
                    სელფი კამერა
                    სელფი კამერის ტიპი:
                    Single
                    სელფი კამერა:
                    7 MP
                    N1 კამერა:
                    7 MP, f/2.2, 32mm
                    ვიდეო:
                    1080p@30fps
                    დამატებითი თვისებები:
                    Face detection, HDR, panorama
                    კავშირი
                    WLAN:
                    Wi-Fi 802.11, Dual-band, Hotspot, Wi-Fi Direct
                    Bluetooth:
                    5.0, A2DP, LE
                    GPS:
                    Yes, with A-GPS, GLONASS, GALILEO
                    FM-რადიო:
                    NO
                    USB პორტი:
                    Lightning
                    3.5mm პორტი:
                    NO
                    Wireless დატენვა:
                    YES
                    სენსორები
                    თითის ანაბეჭდი:
                    Front-mounted
                    სახის ამომცნობი:
                    NO
                    ელემენტი
                    ელემენტის ტიპი:
                    Non-removable
                    ზომა mAh:
                    Li-ion 1821 mAh
                    ',
                    'Photo' => 'Apple_Smartphone_2',

                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'ProductName' => 'ASUS 15 X509FL-BQ174 grey',
                    'Id_Brand' => 7,
                    'Id_Category' => 2,
                    'Price' => 2999,
                    'Discount' => 1,
                    'Content' => '
                    მწარმოებელი
                    ბრენდი:
                    Asus
                    სერია:
                    Vivobook
                    ეკრანი
                    ეკრანის ზომა:
                    15.6 inch
                    გაფართოება:
                    1920X1080
                    პროცესორი
                    ტიპი:
                    Intel Core i7
                    მოდელი:
                    8565U
                    ბირთვი, სიხშირე:
                    Quad-Core 1.8 GHz
                    მეხსიერება
                    მყარი დისკის ტიპი:
                    SSD+HDD
                    ოპერტიული მეხსიერება:
                    8GB
                    ოპერტიული მეხსიერების ტიპი:
                    DDR4
                    მყარი დისკი:
                    HDD 1TB + SSD 256GB
                    გრაფიკული ადაპტერი
                    ვიდეობარათის მოდელი:
                    Nvidia GeForce MX250
                    ვიდეობარათის ტიპი:
                    Dedicated
                    ვიდეობარათი:
                    Nvidia
                    ოპერაციული სისტემა
                    ოპერაციული სისტემა:
                    Free Dos
                    კავშირი
                    Wi-Fi:
                    Wi-Fi: 802.11b/g/n
                    Bluetooth:
                    Bluetooth 4.0
                    პორტები
                    Audio jack:
                    1 x audio jack
                    HDMI პორტი:
                    1 x HDMI
                    ბარათის წამკითხველი:
                    1 x Cardreader
                    ვებ-კამერა
                    ვებ-კამერის მეგაპიქსელი:
                    0.3 MP
                    ელემენტი
                    ელემენტი:
                    Li-Ion 3-cell
                    კორპუსი
                    მასალა:
                    Plastic
                    ფერი:
                    grey
                    ',
                    'Photo' => 'Asus_Leptop_1',

                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'ProductName' => 'ASUS 15 X571GD-BQ208 black',
                    'Id_Brand' => 7,
                    'Id_Category' => 2,
                    'Price' => 3499,
                    'Discount' => 1,
                    'Content' => '
                    მწარმოებელი
                    ბრენდი:
                    Asus
                    სერია:
                    Vivobook
                    ეკრანი
                    ეკრანის ზომა:
                    15.6 inch
                    გაფართოება:
                    1920X1080
                    პროცესორი
                    ტიპი:
                    Intel Core i5
                    მოდელი:
                    9300H
                    ბირთვი, სიხშირე:
                    Hexa-Core 2.4 GHz
                    მეხსიერება
                    მყარი დისკის ტიპი:
                    SSD+HDD
                    ოპერტიული მეხსიერება:
                    8GB
                    ოპერტიული მეხსიერების ტიპი:
                    DDR4
                    მყარი დისკი:
                    HDD 1TB + SSD 256GB
                    გრაფიკული ადაპტერი
                    ვიდეობარათის მოდელი:
                    Nvidia GeForce GTX 1050
                    ვიდეობარათის ტიპი:
                    Dedicated
                    ვიდეობარათი:
                    Nvidia
                    ოპერაციული სისტემა
                    ოპერაციული სისტემა:
                    Free Dos
                    კავშირი
                    Wi-Fi:
                    Wi-Fi: 802.11b/g/n
                    Bluetooth:
                    Bluetooth 4.0
                    პორტები
                    Audio jack:
                    1 x audio jack
                    HDMI პორტი:
                    1 x HDMI
                    ბარათის წამკითხველი:
                    1 x Cardreader
                    ვებ-კამერა
                    ვებ-კამერის მეგაპიქსელი:
                    0.3 MP
                    ელემენტი
                    ელემენტი:
                    Li-Ion 3-cell
                    კორპუსი
                    მასალა:
                    Plastic
                    ფერი:
                    black
                    ',
                    'Photo' => 'Asus_Leptop_2',

                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'ProductName' => 'Lenovo Legion Y740-17IRH 81UG0017RK',
                    'Id_Brand' => 5,
                    'Id_Category' => 2,
                    'Price' => 5999,
                    'Discount' => 1,
                    'Content' => '
                    მწარმოებელი
                    ბრენდი:
                    Lenovo
                    სერია:
                    LEGION
                    ეკრანი
                    ეკრანის ზომა:
                    17.3 inch (144Hz)
                    გაფართოება:
                    1920X1080
                    სენსორული ეკრანი:
                    NO
                    360 მოძრავი ეკრანი:
                    NO
                    პროცესორი
                    ტიპი:
                    Intel Core i7
                    მოდელი:
                    9750H
                    ბირთვი, სიხშირე:
                    Hexa-Core 2.6 GHz
                    მეხსიერება
                    მყარი დისკის ტიპი:
                    SSD+HDD
                    ოპერტიული მეხსიერება:
                    16GB
                    ოპერტიული მეხსიერების ტიპი:
                    DDR4
                    მყარი დისკი:
                    HDD 1TB + SSD 256GB
                    გრაფიკული ადაპტერი
                    ვიდეობარათის მოდელი:
                    Nvidia GeForce GTX 1660 Ti GDDR6
                    ვიდეობარათის ტიპი:
                    Dedicated
                    ვიდეობარათი:
                    Nvidia
                    მეხსიერება:
                    6GB
                    ოპერაციული სისტემა
                    ოპერაციული სისტემა:
                    Free Dos
                    ოპტიკური დისკწამკითხველი
                    ოპტიკური დისკწამკითხველი:
                    NO
                    პორტები
                    USB:
                    1 x USB 3.1
                    Audio jack:
                    1 x audio jack
                    HDMI პორტი:
                    1 x HDMI
                    ბარათის წამკითხველი:
                    1 x Cardreader
                    კორპუსი
                    ფერი:
                    black
                    ',
                    'Photo' => 'Acer_Leptop_1',

                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'ProductName' => 'Lenovo Legion Y740-15IRH 81UF001PRK',
                    'Id_Brand' => 5,
                    'Id_Category' => 2,
                    'Price' => 5599,
                    'Discount' => 1,
                    'Content' => '
                    მახასიათებელი
                    პროდუქტის ტიპი:
                    Gaming
                    ფერი:
                    black
                    მწარმოებელი
                    ბრენდი:
                    Lenovo
                    სერია:
                    LEGION
                    ეკრანი
                    ეკრანის ზომა:
                    15.6 inch (144Hz)
                    გაფართოება:
                    1920X1080
                    პროცესორი
                    ტიპი:
                    Intel Core i7
                    მოდელი:
                    9750H
                    ბირთვი, სიხშირე:
                    Hexa-Core 2.6 GHz
                    მეხსიერება
                    მყარი დისკის ტიპი:
                    SSD+HDD
                    ოპერტიული მეხსიერება:
                    16GB
                    ოპერტიული მეხსიერების ტიპი:
                    DDR4
                    მყარი დისკი:
                    HDD 1TB + SSD 256GB
                    გრაფიკული ადაპტერი
                    ვიდეობარათის მოდელი:
                    Nvidia GeForce GTX 1660 Ti GDDR6
                    ვიდეობარათის ტიპი:
                    Dedicated
                    ვიდეობარათი:
                    Nvidia
                    მეხსიერება:
                    6GB
                    ოპერაციული სისტემა
                    ოპერაციული სისტემა:
                    Free Dos
                    პორტები
                    Audio jack:
                    1 x audio jack
                    HDMI პორტი:
                    1 x HDMI
                    ელემენტი
                    ელემენტი:
                    Li-Ion 3-cell
                    კორპუსი
                    ფერი:
                    black
                    ',
                    'Photo' => 'Acer_Leptop_2',

                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'ProductName' => 'Samsung SM-T595 Galaxy Tab A 32GB LTE',
                    'Id_Brand' => 2,
                    'Id_Category' => 3,
                    'Price' => 1099,
                    'Discount' => 1,
                    'Content' => '
                    მწარმოებელი
                    ბრენდი:
                    Samsung
                    წარმოება
                    გამოშვების თარიღი:
                    2018, August
                    კომუნიკაცია
                    ტექნოლოგია:
                    GSM / HSPA / LTE
                    კავშირის სტანდარტი:
                    4G/3G/2G
                    კორპუსი
                    პლანშეტის ტიპი:
                    Planshet
                    ზომები:
                    260 x 161.1 x 8 mm
                    წონა:
                    534 g
                    სიმ ბარათი-SIM:
                    Single Sim
                    ეკრანი
                    ეკრანის ტიპი:
                    IPS LCD, capacitive touchscreen, 16M colors
                    ეკრანის ზომა:
                    10.5 inches
                    ეკრანის ზედაპირი:
                    319.7 cm2, (~76.3% screen-to-body ratio)
                    ეკრანის გაფართოება:
                    1920 x 1200 pixels
                    ეკრანის ფორმატი:
                    16:10 ratio, (~216 ppi density)
                    მულტიტაჩი:
                    YES
                    პლატფორმა
                    ოპერაციული სისტემა:
                    Android
                    ჩიპსეტი:
                    Qualcomm Snapdragon 450
                    პროცესორი:
                    Octa-core 1.8 GHz
                    გრაფიკული პროცესორი:
                    Adreno 506
                    შიდა მეხსიერება:
                    32 GB
                    ოპერატიული მეხსიერება:
                    3 GB
                    ბარათის სლოტი:
                    microSD, up to 512 GB (dedicated slot)
                    კამერა
                    მთავარი კამერის ტიპი:
                    Single
                    N1 კამერა:
                    8 MP, AF
                    ვიდეო:
                    1080p@30fps
                    სელფი კამერა
                    სელფი კამერის ტიპი:
                    Single
                    ვიდეო:
                    1080p@30fps
                    სელფი კამერა:
                    5 MP
                    კავშირი
                    WLAN:
                    Wi-Fi 802.11 a/b/g/n/ac, dual-band, Wi-Fi Direct, hotspot
                    Bluetooth:
                    4.2, A2DP, LE
                    GPS:
                    Yes, with A-GPS, GLONASS
                    რადიო:
                    NO
                    USB Port:
                    Type C, 2.0
                    3.5mm Jack:
                    YES
                    ელემენტი
                    ზომა mAh:
                    Li-Ion 7300 mAh
                    ელემენტის ტიპი:
                    Non-removable
                    დაკავშირება
                    ტაბი-Powe Bank:
                    YES
                    ',
                    'Photo' => 'Samsung_Plantshop_1',

                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ],
                [
                    'ProductName' => 'Samsung SM-T515 Galaxy Tab 10.1 32GB LTE Black',
                    'Id_Brand' => 2,
                    'Id_Category' => 3,
                    'Price' => 869,
                    'Discount' => 1,
                    'Content' => '
                    მწარმოებელი
                    ბრენდი:
                    Samsung
                    წარმოება
                    გამოშვების თარიღი:
                    2019
                    კომუნიკაცია
                    ტექნოლოგია:
                    GSM / HSPA / LTE
                    კავშირის სტანდარტი:
                    4G/3G/2G
                    კორპუსი
                    ზომები:
                    245 x 149 x 7.5 mm
                    წონა:
                    460 g
                    კორპუსის აწყობა:
                    Front glass
                    სიმ ბარათი-SIM:
                    Single Sim
                    სიმ ბარათი-SIM ტიპი:
                    Nano-SIM
                    ეკრანი
                    ეკრანის ტიპი:
                    IPS LCD, 16M colors
                    ეკრანის ზომა:
                    10.1 inches
                    ეკრანის ზედაპირი:
                    295.8 cm2 (~81.0% screen-to-body ratio)
                    ეკრანის გაფართოება:
                    1200x1920 pixels
                    ეკრანის ფორმატი:
                    (~224 ppi density)
                    პლატფორმა
                    ოპერაციული სისტემა:
                    Android
                    ჩიპსეტი:
                    Exynos 7904
                    პროცესორი:
                    Octa-core (2x1.8 GHz Cortex-A73 & 6x1.6 GHz Cortex-A53)
                    გრაფიკული პროცესორი:
                    Mali-G71 MP2
                    შიდა მეხსიერება:
                    32 GB
                    ოპერატიული მეხსიერება:
                    2 GB
                    ბარათის სლოტი:
                    up to 512 GB (dedicated slot)
                    კამერა
                    მთავარი კამერის ტიპი:
                    Single
                    მთავარი კამერა:
                    8 MP
                    N1 კამერა:
                    8 MP, f/2.0, AF
                    ვიდეო:
                    1080p 30fps
                    დამატებითი თვისებები:
                    LED flash, Panorama
                    სელფი კამერა
                    N1 კამერა:
                    8 MP
                    სელფი კამერის ტიპი:
                    Single
                    ვიდეო:
                    1080p@30fps
                    სელფი კამერა:
                    5 MP
                    დამატებითი თვისებები:
                    5 MP
                    კავშირი
                    WLAN:
                    Wi-Fi 802.11 a/b/g/n/ac, dual-band, hotspot, Wi-Fi Direct
                    Bluetooth:
                    5.0, A2DP, LE
                    GPS:
                    Yes, GLONASS, with A-GPS
                    NFC:
                    NO
                    რადიო:
                    NO
                    USB Port:
                    Type C, 2.0
                    3.5mm Jack:
                    YES, Dolby Atmos sound
                    Wireless დატენვა:
                    NO
                    სენსორები
                    თვალის სკანერი:
                    NO
                    სახის ამომცნობი:
                    NO
                    თითის ანაბეჭდი:
                    NO
                    ელემენტი
                    ელემენტის ტიპი:
                    Non-removable
                    ზომა mAh:
                    Li-Po 6150 mAh
                    ',
                    'Photo' => 'Samsung_Plantshop_2',

                    'created_at' => date('Y-m-d H:i:s'),
                    'updated_at' => date('Y-m-d H:i:s'),
                ]
            ]);
        } else { echo "\e[31mTable is not empty, therefore NOT "; }
    }
}
