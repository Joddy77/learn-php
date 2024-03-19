<html>
    <body>
        
    <!-- Ini adalah contoh dari membuat variable di php -->
        <?php
            // cara penulisan variable dalam php
            $x = 5;
            $y = "John";

            // echo adalah cara pemanggilan di php 
            // kedua ini sama saja hasilnya tidak ada perbedaan hanya saja ketika pemanggilan menggunakan titik berarti ada string yg terpisah
            $txt = "W3Schools.com";
            echo "I love $txt!";

            $txt = "W3Schools.com";
            echo "I love " . $txt . "!";
        ?>

        <?php
            // untuk mengetahui tipe data dalam sebuah nilai bisa menggunakan seperti di bawah ini.
            var_dump(5);
            var_dump("John");
            var_dump(3.14);
            var_dump(true);
            var_dump([2, 3, 56]);
            var_dump(NULL);
        ?>

        <?php 
            // Mengganti nilai variabel dengan 1 line.
            $x = $y = $z = "Fruit";
            echo $x;
            echo $y;
            echo $z;
        ?>
        
    <!-- variable dalam php juga di ada 3 perbedaan yaitu : local, global, static -->
        <?php
        // UNTUK VARIABLE LOCAL ATURANYA MASIH SAMA SEPERTI BIASA DI BERBAGAI BAHASA PEMOGRAMAN.

        // global keyword 
        // bisa di gunakan ketika membuat function dan ingin mengambil nilai varible dari luar function seperti di bawah ini dengan mengeetik global.
        $x = 5;
        $y = 10;

        function myTest() {
            global $x, $y;
            $y = $x + $y;
        }

        myTest();
        echo $y; // outputs 15

        // bisa juga dengan seperti ini $GLOBAL[index]
        $x = 5;
        $y = 10;

        /*
        function myTest() {
            $GLOBALS['y'] = $GLOBALS['x'] + $GLOBALS['y'];
        }
        */

        myTest();
        echo $y; // outputs 15

        // static Keyword
        // berguna ketika kita menggunakan variabel untuk pekerjaan selanjutnya karna nilai dari variabel pertama tidak akan di hapus.

        // function myTest() {
        //     static $x = 0;
        //     echo $x;
        //     $x++;
        // }
          
          myTest();
          myTest();
          myTest();
        ?>
</body>
</html>