<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pendafttaran Karyawan</title>

    <style>
        body {
            background: #02AAB0;
            /* fallback for old browsers */
            background: -webkit-linear-gradient(to left, #00CDAC, #02AAB0);
            /* Chrome 10-25, Safari 5.1-6 */
            background: linear-gradient(to left, #00CDAC, #02AAB0);
            /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
            overflow-y: hidden;
        }

        .input-form {
            height: 20px;
            width: 340px;
        }



        .input-group {
            padding: 5px;
        }

        .button-form {
            width: 80px;
            height: 30px;
            cursor: pointer;
            border: 0;

        }

        .button-form:hover {
            background-color: rgb(55, 55, 146);
            color: white;
        }

        .button-reset:hover {
            background-color: rgb(55, 55, 146);
            color: white;
        }

        .button-input {
            margin-top: 10px;
            height: 30px;
            cursor: pointer;
            border: 0;
        }

        .button-reset {
            margin-left: 185px;
            width: 80px;
            height: 30px;
            cursor: pointer;
            border: 0;

        }


        .card {
            margin-top: -230px;
        }

        .card-content {
            border: 2px solid black;
            padding: 30px;
            height: 200px;

        }

        .side-header {
            padding: 30px;
        }

        img {
            border: 1px solid white;
            padding: 8px;
            margin-left: -15px;
        }

        .form-control {
            margin-left: 300px;
            border: 1px solid white;
            width: 700px;
            height: auto;

        }
    </style>
</head>

<body>
    <div class="form-control">
        <table>
            
            <tr>
                <td>
                    <div class="card">
                        <div class="card-content">
                            <h4 align="center">!Photos</h4>
                        </div>
                        <div class="card-actions">
                            <input type="file" class="button-input">
                        </div>
                    </div>
                </td>
                <td>&nbsp;&nbsp;&nbsp;&nbsp;</td>
                <td>
                    <div class="input-group">
                        <label for="">Nik</label>
                        <br/>
                        <input class="input-form" type="text" name="nik" id="nik">
                        <br/>
                    </div>


                    <div class="input-group">
                        <label for="">Nama</label>
                        <br/>
                        <input class="input-form" type="text" name="nama" id="nama">
                        <br/>
                    </div>

                    <div class="input-group">
                        <label for="">Tempat & Tanggal Lahir</label>
                        <br/>
                        <input class="input-form" type="text" name="ttl" id="ttl">
                        <br/>
                    </div>

                    <div class="input-group">
                        <label for="">Gender</label>
                        <br/>
                        <input type="radio" name="jk" value="Laki" id="jk"> Laki-Laki
                        <input id="jk" type="radio" name="jk" value "Perempuan"> Perempuan
                    </div>

                    <div class="input-group">
                        <label for="">Alamat</label>
                        <br/>
                        <textarea name="alamat" rows="6" cols="40" id="alamat"></textarea>
                    </div>

                    <div class="input-group">
                        <label for="">Telephone</label>
                        <br/>
                        <input class="input-form" type="text" name="tlp" id="tlp">
                        <br/>
                    </div>

                    <div class="input-group">
                        <label for="">Pendidikan Terakhir</label>
                        <br/>
                        <select name="pendidikan" id="pendidikan">
                            <option value="">=== Pilih ===</option>
                            <option value="SMA/SMK">SMA/SMK</option>
                            <option value="S1">S1</option>
                            <option value="S2">S2</option>
                            <option value="S3">S3</option>
                        </select>
                    </div>

                    <div class="input-group">
                        <label for="">Bidang</label>
                        <br/>
                        <input class="input-form" type="text" id="bidang" name="bidang">
                        <br/>
                    </div>


                    <button type="reset" class="button-reset" name="submit">Batal</button>
                    <button type="submit" class="button-form" name="submit">Simpan</button>
                    </form>
                </td>
            </tr>
        </table>

    </div>
</body>

</html>