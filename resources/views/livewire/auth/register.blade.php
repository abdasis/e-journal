<div>
    <div class="card shadow-md">
        <div class="card-body">
            <h3 class="card-title">Form Pendaftaran</h3>
            <h4>Register</h4>
            <p>Silahkan isikan sesuai biodata data anda</p>

            <form wire:submit.prevent='store'>
                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Telepon</label>
                    <input type="text" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Email</label>
                    <input type="email" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Password</label>
                    <input type="password" class="form-control">
                </div>

                <div class="form-group">
                    <label for="">Nama Lengkap</label>
                    <select id="" class="custom-select">
                        <option value="LAKI-LAKI">LAK-LAKI</option>
                        <option value="PEREMPUAN">PEREMPUAN</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Negara</label>
                    <select id="" class="custom-select">
                        <option value="Indonesia">Indonesia</option>
                    </select>
                </div>

                <div class="form-group">
                    <label for="">Biodata</label>
                    <textarea name="" id="" cols="30" rows="10" class="form-control"></textarea>
                </div>

                <div class="form-group">
                    <button class="btn btn-success">Register Sekarang</button>
                </div>
            </form>

            <h4>Privacy Statment</h4>
            <p>Nama dan alamat email yang dimasukkan dalam situs jurnal ini akan digunakan secara eksklusif untuk tujuan jurnal ini dan tidak akan tersedia untuk tujuan lain atau pihak lain mana pun. (Nama dan alamat email yang dimasukkan dalam situs jurnal yang akan digunakan secara eksklusif untuk tujuan jurnal ini dan tidak akan tersedia untuk tujuan lain atau kepada pihak lain.)</p>
        </div>
    </div>
</div>
