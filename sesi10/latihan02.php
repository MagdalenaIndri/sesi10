<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan Form 2</title>
</head>
<body>
    <form name="Latihan1" method="POST" onsubmit="return checkform(this)">
        <div>
            Nim
            <input type="text" name="txNIM">
        </div>
        <div>
            Jenis kelamin
            <input type="radio"name="txJK" value="L">Laki-Laki
            <input type="radio"name="txJK" value="p">perempuan
        </div>
        <div>
            Jurusan
            <select name="txJURUSAN">
                <option value="MTI">MTI</option>
                <option value="KAB">KAB</option>
                <option value="DSN">DSN</option>
            </select>
        </div>
        <div>
            Hobi
            <input type="checkbox" name="txhobi"id="txhobi" value="1">Sepak Bola
            <input type="checkbox" name="txhobi"id= "txhobi" value="2">Bulu tangkis
            <input type="checkbox" name="txhobi"id="txhobi" value="3">Bola Voli
            <input type="checkbox" name="txhobi"id="txhobi" value="4">Tenis Meja
            <input type="checkbox" name="txhobi"id="txhobi" value="5">Baca
            <input type="checkbox" name="txhobi"id="txhobi" value="6">Futsal
        </div>
        <div>
            <button type="submit">Kirim Data</button>
        </div>
    </form>

    <script type="text/javascript">
        function checkform(){
            let frm = document.getEmentById ("latihan02").elements;

            let NIM = frm.txNIM;
            let jnskl = frm.txhobi[0].checked,
            let jur = frm.txhobi[1].checked,
            let hobi = frm.txhobi[2].checked

            console.log("Nim: "+NIM);
            console.log("hobi: "+hobi1);
            console.log("Jurusan: "+hobi2);
            console.log("hobi: "+hobi3);
           
            return false;
        }
    </script>
</body>
</html>