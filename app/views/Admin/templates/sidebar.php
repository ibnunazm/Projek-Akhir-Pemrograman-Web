<div class="sidebar">
    <h1>KootBook</h1>
    <a href="<?= BASEURL ?>/Admin/"><h2>Dashboard</h1></a>
    <div class="profile-admin">
    <svg xmlns="http://www.w3.org/2000/svg" width="140" height="140" viewBox="0 0 24 24"><path fill="currentColor" fill-rule="evenodd" d="M12 4a8 8 0 0 0-6.96 11.947A4.99 4.99 0 0 1 9 14h6a4.99 4.99 0 0 1 3.96 1.947A8 8 0 0 0 12 4Zm7.943 14.076A9.959 9.959 0 0 0 22 12c0-5.523-4.477-10-10-10S2 6.477 2 12a9.958 9.958 0 0 0 2.057 6.076l-.005.018l.355.413A9.98 9.98 0 0 0 12 22a9.947 9.947 0 0 0 5.675-1.765a10.055 10.055 0 0 0 1.918-1.728l.355-.413l-.005-.018ZM12 6a3 3 0 1 0 0 6a3 3 0 0 0 0-6Z" clip-rule="evenodd"/></svg>
    <h3>ADMIN</h3>
    </div>
    
    <ul class="option-sidebar-admin">
        <li>
        <a href="<?= BASEURL ?>/Admin/listUser"><button>List User</button></a>
        </li>
        <li>
        <a href="<?= BASEURL ?>/Admin/updateBuku"><button>Update Buku</button></a>
        </li>
        <li>
        <a href="<?= BASEURL ?>/Admin/cekPeminjam"><button>Cek Peminjam</button></a>
        </li>
        <div class="logout-button">
        <li>
        <a href="<?= BASEURL ?>/" id="logout-button"><button>Log Out</button></a>
        </li>
        </div>
    </ul>
</div>