<div class="mainbar">
        <form>
            <input type="image" src="../../../public/assets/images/Kootbook.png">
        </form>
        <img src="../../../public/assets/images/Profile.png" alt="Image">
    </div>
    <div class="Container1">
        <div class="Container1_a">
            <div class="Cover_Buku">
                <img src="../../../public/assets/images/Cover-Buku.png" alt="Cover Buku">
            </div>
            <div class="Detail_Buku1">
                <div class="DB1_Isi">
                    <p><?=$data['book'][0]['Judul']?></p>
                </div>
                <div class="DB1_Isi">
                    <p><?=$data['book'][0]['Penulis']?></p>
                </div>
                <div class="DB1_Isi">
                    <p><?=$data['book'][0]['Penerbit']?></p>
                </div>
                <div class="DB1_Isi">
                    <p><?=$data['book'][0]['Tahun_Terbit']?></p>
                </div>
            </div>
        </div>
        <div class="Detail_buku2">
            <h1><?=$data['book'][0]['Judul']?></h1>
            <p><?=$data['book'][0]['Penulis']?></p>
            <p>
            <?=$data['book'][0]['Sinopsis']?>
            </p>
            <form action="<?= BASEURL ?>/User/PinjamBuku/<?=$data['book'][0]['ID_Buku']?>" method="post">
                <div class="Submit">
                    <div class="Submit_Button2">
                        <input type="button" id="Cancel" value="Favorit">
                    </div>
                    <p>Stock Buku : <?=$data['book'][0]['Stock']?></p>
                    <div class="Submit_Button1">
                        <input type="submit" id="Pinjam" value="Pinjam">
                    </div>
                </div>
            </form>
        </div>
    </div>
