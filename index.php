<?php
$url = 'http://localhost:63342/index.php/index.php?_ijt=uhka31mbl6kjrj57aagh06kfsv';
if($url == ((!empty($_SERVER['HTTPS'])) ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'])
{
    {
        $array2 =
            [
                0 =>
                    [
                        "URL" => "https://ireland.apollo.olxcdn.com/v1/files/u7rxfuvhyucm2-UA/image;s=644x461",
                        "Description" => "Защитное стекло на айфон х,11Pro/11Pro Max,6,7,8+,Хr,5,5s,se",
                        "Cost" => 69,
                        "Date" => "12:49, 20 октября 2020",
                        "Adress" => "Ирпень, Киевская область",
                        "isTop" => true
                    ],
                1 =>
                    [
                        "URL" => "https://ireland.apollo.olxcdn.com/v1/files/05eq552mcbic3-UA/image;s=1000x700",
                        "Description" => "Новые. iPhone 6 16/64gb Sp. Gray/Gold/Silver айфон new 5 7 Х +",
                        "Cost" => 3999,
                        "Date" => "17:35, 20 октября 2020",
                        "Adress" => "Николаев, Николаевская область, Центральный",
                        "isTop" => true
                    ],
                2 =>
                    [
                        "URL" => "https://ireland.apollo.olxcdn.com/v1/files/z8l7n1h0n5pp3-UA/image;s=1000x700",
                        "Description" => "• Запаковані Нові • iPhone X 64 Айфон Х 7 8+ plus Xr Xs max 32 128 256",
                        "Cost" => 14199,
                        "Date" => "15:45, 19 октября 2020",
                        "Adress" => "Киев, Киевская область, Днепровский",
                        "isTop" => true
                    ]
            ];

        function generate_dom($test)
        {
            return
                '
            <table style="background: ghostwhite" align="center" width="31%">
                <tr>
                    <td rowspan="5"><img align="right" width="150px" height="150px" alt="OLX_Img_1" src="' . $test["URL"] . '"</td>
                    <td style="background: lightgoldenrodyellow">' . $test["Description"] . '</td>
                </tr>
                <tr>
                    <td style="background: lightgoldenrodyellow">' . $test["Cost"] . '</td>
                    </tr>
                <tr>
                    <td style="background: lightgoldenrodyellow">' . $test["Date"] . '</td>
                </tr>
                <tr>
                    <td style="background: lightgoldenrodyellow">' . $test["Adress"] . '</td>
                </tr>
                <tr>
                    <td style="background: lightgoldenrodyellow">' . $test["isTop"] . '</td>
                </tr>
            </table>
        ';
        }

        foreach ($array2 as $key => $value) {
            echo generate_dom($value);
        }
    }
}
else
{
    header('location: 404.html');
    exit();
}
?>