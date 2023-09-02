<?php
session_start();
if (!isset($_SESSION['username'])) {
    header('Location: index.php');
    exit();  
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style3.css">
    <title>GET STARTED</title>
</head>

<body>
    <form action="" method="post">
        <label for="id">Company:</label>
        <select name="companies" class="select-style">
            <option>Select One</option>
            <option value="1">BHP</option>
            <option value="2">Rio Tinto</option>
            <option value="3">Çin Shenhua Enerji</option>
            <option value="4">Sedex</option>
        </select>
        <input type="submit" name="submit" value="Okay">
        
        <label for="id">Pb%:</label>
        <select name="pb_tables" class="select-style"> 
            <option>Select One</option> 
            <option value="1"><=%5</option>
            <option value="2">%5-%6,99</option> 
            <option value="3">%7-%8,99</option>
            <option value="4">%9-%10,99</option>
            <option value="5">%11-%12,99</option>
            <option value="6">%13-%14,99</option>
        </select>

        <label for="id">Zn%:</label>
        <select name="zn_tables" class="select-style">    
            <option>Select One</option>
            <option value="1">%8</option>    
            <option value="2">%9</option>    
            <option value="3">%10</option>    
            <option value="4">%11</option>    
            <option value="5">%12</option>    
            <option value="6">%13</option>    
            <option value="7">%14</option>    
            <option value="8">%15</option>    
            <option value="9">%16</option>    
            <option value="10">%17</option>    
            <option value="11">%18</option>    
            <option value="12">%19</option>    
            <option value="13">%20</option>
            <option value="14">%21</option>
            <option value="15">%22</option>
            <option value="16">%23</option>
            <option value="17">%24</option>
            <option value="18">%25</option>
            <option value="19">%26</option>
            <option value="20">%27</option>
            <option value="21">%28</option>
            <option value="22">%29</option>
            <option value="23">%30</option>
            <option value="24">%31</option>
            <option value="25">%32</option>
            <option value="26">%33</option>
            <option value="27">%34</option>
            <option value="28">%35</option>
        </select>

        <B>LME ZN:</B><input type="text" name="lme_zn">
        <B>LME PB:</B><input type="text" name="lme_pb">

        <input type="submit" name="submit_2" value="Okay">

        <a href="homes.php" class="home-link">HOME</a>

    </form>
    
    <?php
    include("db_conn.php");
    error_reporting(0);
    ini_set("display_errors", 0);

    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $selected_company = $_POST['companies'];

        $sec_company = "SELECT * FROM companiess WHERE id = :id";
        $sonuc_company = $db->prepare($sec_company);
        $sonuc_company->bindParam(':id', $selected_company, PDO::PARAM_INT);
        $sonuc_company->execute();


        $rowCount_company = $sonuc_company->rowCount();

        if ($rowCount_company > 0) {
            $cek_company = $sonuc_company->fetch(PDO::FETCH_ASSOC);
            if(isset($_POST['option'])) {
                $selectedOption = $_POST['option'];
            } else {
                echo "";
            }
            echo "
                <table>
                    <tr>
                        <th>İd:</th>
                        <th>Companies:</th>
                    </tr>
                    <tr>
                        <td>" . $cek_company['id'] . "</td>
                        <td>" . $cek_company['Companies'] . "</td>
                    </tr>
                </table>
            ";
        } else {
            echo "Veritabanında kayıtlı hiçbir veri bulunamadı!";
        }

        // PB Tablosunu göster
        $sec_pb = "SELECT * FROM pb WHERE id = :id";
        $sonuc_pb = $db->prepare($sec_pb);
        $sonuc_pb->bindParam(':id', $selected_company, PDO::PARAM_INT);
        $sonuc_pb->execute();

        $rowCount_pb = $sonuc_pb->rowCount();

        if ($rowCount_pb > 0) {
            echo "<table>";
            echo "
                <tr>
                    <th><=%5</th>
                    <th>%5-%6,99</th>
                    <th>%7-%8,99</th>
                    <th>%9-%10,99</th>
                    <th>%11-%12,99</th>
                    <th>%13-%14,99</th>
                </tr>
            ";
            while ($cek_pb = $sonuc_pb->fetch(PDO::FETCH_ASSOC)) {
                echo "
                    <tr>
                        <td>" . $cek_pb['<=%5'] . "<b> $</b></td>
                        <td>" . $cek_pb['%5-%6,99'] . "<b> $</b></td>
                        <td>" . $cek_pb['%7-%8,99'] . "<b> $</b></td>
                        <td>" . $cek_pb['%9-%10,99'] . "<b> $</b></td>
                        <td>" . $cek_pb['%11-%12,99'] . "<b> $</b></td>
                        <td>" . $cek_pb['%13-%14,99'] . "<b> $</b></td>
                    </tr>
                ";
            }
            echo "</table>";
        } else {
            echo "Veritabanında kayıtlı hiçbir veri bulunamadı!";
        }

        // ZN Tablosunu göster
        $sec_zn = "SELECT * FROM zn WHERE id = :id";
        $sonuc_zn = $db->prepare($sec_zn);
        $sonuc_zn->bindParam(':id', $selected_company, PDO::PARAM_INT);
        $sonuc_zn->execute();

        $rowCount_zn = $sonuc_zn->rowCount();

        if ($rowCount_zn > 0) {
            echo "<table>";
            echo "
                <tr>
                    <th>%8</th>
                    <th>%9</th>
                    <th>%10</th>
                    <th>%11</th>
                    <th>%12</th>
                    <th>%13</th>
                    <th>%14</th>
                    <th>%15</th>
                    <th>%16</th>
                    <th>%17</th>
                    <th>%18</th>
                    <th>%19</th>
                    <th>%20</th>
                    <th>%21</th>
                    <th>%22</th>
                    <th>%23</th>
                    <th>%24</th>
                    <th>%25</th>
                    <th>%26</th>
                    <th>%27</th>
                    <th>%28</th>
                    <th>%29</th>
                    <th>%30</th>
                    <th>%31</th>
                    <th>%32</th>
                    <th>%33</th>
                    <th>%34</th>
                    <th>%35</th>
                </tr>
            ";
            while ($cek_zn = $sonuc_zn->fetch(PDO::FETCH_ASSOC)) {
                echo "
                    <tr>
                        <td>%" . $cek_zn['%8'] . "</td>
                        <td>%" . $cek_zn['%9'] . "</td>
                        <td>%" . $cek_zn['%10'] . "</td>
                        <td>%" . $cek_zn['%11'] . "</td>
                        <td>%" . $cek_zn['%12'] . "</td>
                        <td>%" . $cek_zn['%13'] . "</td>
                        <td>%" . $cek_zn['%14'] . "</td>
                        <td>%" . $cek_zn['%15'] . "</td>
                        <td>%" . $cek_zn['%16'] . "</td>
                        <td>%" . $cek_zn['%17'] . "</td>
                        <td>%" . $cek_zn['%18'] . "</td>
                        <td>%" . $cek_zn['%19'] . "</td>
                        <td>%" . $cek_zn['%20'] . "</td>
                        <td>%" . $cek_zn['%21'] . "</td>
                        <td>%" . $cek_zn['%22'] . "</td>
                        <td>%" . $cek_zn['%23'] . "</td>
                        <td>%" . $cek_zn['%24'] . "</td>
                        <td>%" . $cek_zn['%25'] . "</td>
                        <td>%" . $cek_zn['%26'] . "</td>
                        <td>%" . $cek_zn['%27'] . "</td>
                        <td>%" . $cek_zn['%28'] . "</td>
                        <td>%" . $cek_zn['%29'] . "</td>
                        <td>%" . $cek_zn['%30'] . "</td>
                        <td>%" . $cek_zn['%31'] . "</td>
                        <td>%" . $cek_zn['%32'] . "</td>
                        <td>%" . $cek_zn['%33'] . "</td>
                        <td>%" . $cek_zn['%34'] . "</td>
                        <td>%" . $cek_zn['%35'] . "</td>
                    </tr>
                ";
            }
            echo "</table>";
        } else {
            echo "Veritabanında kayıtlı hiçbir veri bulunamadı!";
        }
    }


    if (isset($_POST['submit_2'])) {
        if (isset($_POST['pb_tables'])) {
            $selected_pb_table = $_POST['pb_tables'];
            $selected_zn_table = $_POST['zn_tables'];

            // PB Tablosundan ilgili değeri çekip göster
            $sec_pb_table = "SELECT * FROM pb WHERE id = :id";
            $sonuc_pb_table = $db->prepare($sec_pb_table);
            $sonuc_pb_table->bindParam(':id', $selected_company, PDO::PARAM_INT);
            $sonuc_pb_table->execute();
    
            $row_pb_table = $sonuc_pb_table->fetch(PDO::FETCH_ASSOC);
    
            if ($row_pb_table) {
                // Pb% değerine göre sütun adını seç
                $pb_column_name = '';
                if ($selected_pb_table === "1") {
                    $pb_column_name = "<=%5";
                } elseif ($selected_pb_table === "2") {
                    $pb_column_name = "%5-%6,99";
                } elseif ($selected_pb_table === "3") {
                    $pb_column_name = "%7-%8,99";
                } elseif ($selected_pb_table === "4") {
                    $pb_column_name = "%9-%10,99";
                } elseif ($selected_pb_table === "5") {
                    $pb_column_name = "%11-%12,99";
                } elseif ($selected_pb_table === "6") {
                    $pb_column_name = "%13-%14,99";
                }
    
                // İlgili değeri al ve göster
                $pb_value = $row_pb_table[$pb_column_name];
                echo "<p>MULTIPLIER PB: $$pb_value</p>";
            } else {
                echo "Veritabanında kayıtlı hiçbir veri bulunamadı!";
            }
    
            // ZN Tablosundan ilgili değeri çekip göster
            $sec_zn_table = "SELECT * FROM zn WHERE id = :id";
            $sonuc_zn_table = $db->prepare($sec_zn_table);
            $sonuc_zn_table->bindParam(':id', $selected_company, PDO::PARAM_INT);
            $sonuc_zn_table->execute();
    
            $row_zn_table = $sonuc_zn_table->fetch(PDO::FETCH_ASSOC);
    
            if ($row_zn_table) {
                // Pb% değerine göre sütun adını seç
                $zn_column_name = '';
                if ($selected_zn_table === "1") {
                    $zn_column_name = "%8";
                } elseif ($selected_zn_table === "2") {
                    $zn_column_name = "%9";
                } elseif ($selected_zn_table === "3") {
                    $zn_column_name = "%10";
                } elseif ($selected_zn_table === "4") {
                    $zn_column_name = "%11";
                } elseif ($selected_zn_table === "5") {
                    $zn_column_name = "%12";
                } elseif ($selected_zn_table === "6") {
                    $zn_column_name = "%13";
                } elseif ($selected_zn_table === "7") {
                    $zn_column_name = "%14";
                } elseif ($selected_zn_table === "8") {
                    $zn_column_name = "%15";
                } elseif ($selected_zn_table === "9") {
                    $zn_column_name = "%16";
                } elseif ($selected_zn_table === "10") {
                    $zn_column_name = "%17";
                } elseif ($selected_zn_table === "11") {
                    $zn_column_name = "%18";
                } elseif ($selected_zn_table === "12") {
                    $zn_column_name = "%19";
                } elseif ($selected_zn_table === "13") {
                    $zn_column_name = "%20";
                } elseif ($selected_zn_table === "14") {
                    $zn_column_name = "%21";
                } elseif ($selected_zn_table === "15") {
                    $zn_column_name = "%22";
                } elseif ($selected_zn_table === "16") {
                    $zn_column_name = "%23";
                } elseif ($selected_zn_table === "17") {
                    $zn_column_name = "%24";
                } elseif ($selected_zn_table === "18") {
                    $zn_column_name = "%25";
                } elseif ($selected_zn_table === "19") {
                    $zn_column_name = "%26";
                } elseif ($selected_zn_table === "20") {
                    $zn_column_name = "%27";
                } elseif ($selected_zn_table === "21") {
                    $zn_column_name = "%28";
                } elseif ($selected_zn_table === "22") {
                    $zn_column_name = "%29";
                } elseif ($selected_zn_table === "23") {
                    $zn_column_name = "%30";
                } elseif ($selected_zn_table === "24") {
                    $zn_column_name = "%31";
                } elseif ($selected_zn_table === "25") {
                    $zn_column_name = "%32";
                } elseif ($selected_zn_table === "26") {
                    $zn_column_name = "%33";
                } elseif ($selected_zn_table === "27") {
                    $zn_column_name = "%34";
                } elseif ($selected_zn_table === "28") {
                    $zn_column_name = "%35";
                }


                $zn_value = $row_zn_table[$zn_column_name];
                echo "<p>MULTIPLIER ZN: %$zn_value</p>";
            } else {
                echo "Veritabanında kayıtlı hiçbir veri bulunamadı!";
            }
        }
    }
    
    if($selected_zn_table === "1") {
        $zn_column_name = 8;
    } elseif ($selected_zn_table === "2") {
        $zn_column_name = 9;
    } elseif ($selected_zn_table === "3") {
        $zn_column_name = 10;
    } elseif ($selected_zn_table === "4") {
        $zn_column_name = 11;
    } elseif ($selected_zn_table === "5") {
        $zn_column_name = 12;
    } elseif ($selected_zn_table === "6") {
        $zn_column_name = 13;
    } elseif ($selected_zn_table === "7") {
        $zn_column_name = 14;
    } elseif ($selected_zn_table === "8") {
        $zn_column_name = 15;
    } elseif ($selected_zn_table === "9") {
        $zn_column_name = 16;
    } elseif ($selected_zn_table === "10") {
        $zn_column_name = 17;
    } elseif ($selected_zn_table === "11") {
        $zn_column_name = 18;
    } elseif ($selected_zn_table === "12") {
        $zn_column_name = 19;
    } elseif ($selected_zn_table === "13") {
        $zn_column_name = 20;
    } elseif ($selected_zn_table === "14") {
        $zn_column_name = 21;
    } elseif ($selected_zn_table === "15") {
        $zn_column_name = 22;
    } elseif ($selected_zn_table === "16") {
        $zn_column_name = 23;
    } elseif ($selected_zn_table === "17") {
        $zn_column_name = 24;
    } elseif ($selected_zn_table === "18") {
        $zn_column_name = 25;
    } elseif ($selected_zn_table === "19") {
        $zn_column_name = 26;
    } elseif ($selected_zn_table === "20") {
        $zn_column_name = 27;
    } elseif ($selected_zn_table === "21") {
        $zn_column_name = 28;
    } elseif ($selected_zn_table === "22") {
        $zn_column_name = 29;
    } elseif ($selected_zn_table === "23") {
        $zn_column_name = 30;
    } elseif ($selected_zn_table === "24") {
        $zn_column_name = 31;
    } elseif ($selected_zn_table === "25") {
        $zn_column_name = 32;
    } elseif ($selected_zn_table === "26") {
        $zn_column_name = 33;
    } elseif ($selected_zn_table === "27") {
        $zn_column_name = 34;
    } elseif ($selected_zn_table === "28") {
        $zn_column_name = 35;
    }
    
    if(isset($_POST['lme_zn']) && isset($_POST['lme_pb'])) {
        $lme_zn_input = $_POST['lme_zn'];
        $lme_pb_input = $_POST['lme_pb'];
    }

    $lme_zn_price = (($zn_value + (int)$zn_column_name) * (int)$zn_column_name) * $lme_zn_input / 10000;
    echo "<br><font color = ffffff>LME ZN: $lme_zn_price </br>";
    
    $lme_pb_price = ($pb_value * $lme_pb_input)/100 ;
    echo "<br><font color = ffffff>LME PB: $lme_pb_price </br>";

    $total_price = $lme_pb_price + $lme_zn_price;
    echo"<br><font color = ffffff>TOTAL PRICE: $total_price</br>";

    ?>

</body>

</html>