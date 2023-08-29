<script>
    $(document).ready(function() {
        let formCount = 1; // Initial form count
    
        // Function to generate a new dynamic form
        function generateDynamicForm(formCount) {
            return `
                {{-- ROW 6--}}
                    <div class="row">
                    <h5>Data Anggota Keluarga ke ${formCount}</h5>
                    {{-- COL 1 --}}
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="nik[]">Nomor NIK</label>
                        <input required type="number" class="form-control" id="nik[]" name="nik[]" placeholder="Masukan NIK"/>
                        </div>
                    </div>
                    {{-- END COL 1 --}}

                    {{-- COL 2 --}}
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="nama_lengkap[]">Nama Lengkap</label>
                        <input required type="text" class="form-control" id="nama_lengkap[]" name="nama_lengkap[]" placeholder="Masukan Nama Lengkap"/>
                        </div>
                    </div>
                    {{-- END COL 2 --}}

                    {{-- COL 3 --}}
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="jenis_kelamin[]">Jenis Kelamin</label>
                        <fieldset class="form-group">
                        <select required class="form-select" name="jenis_kelamin[]" id="jenis_kelamin[]">
                          <option>== Pilih Jenis Kelamin ==</option>
                          <option value="Laki-laki">Laki-laki</option>
                          <option value="Perempuan" >Perempuan</option>
                        </select>
                      </fieldset>
                        </div>
                    </div>
                    {{-- END COL 3 --}}

                    {{-- COL 4 --}}
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="tempat_lahir[]">Tempat Lahir</label>
                        <input required type="text" class="form-control" id="tempat_lahir[]" name="tempat_lahir[]" placeholder="Masukan Tempat Lahir"/>
                        </div>
                    </div>
                    {{-- END COL 4 --}}

                    {{-- COL 5 --}}
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="tanggal_lahir[]">Tanggal Lahir</label>
                        <input required type="date" class="form-control" id="tanggal_lahir[]" name="tanggal_lahir[]" placeholder="Masukan Tanggal Lahir"/>
                        </div>
                    </div>
                    {{-- END COL 5 --}}

                    {{-- COL 6 --}}
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="agama[]">Agama</label>
                        <fieldset class="form-group">
                        <select required class="form-select" name="agama[]" id="agama[]">
                          <option>== Pilih Agama ==</option>
                          <option value="Islam">Islam</option>
                          <option value="Kristen Protestan" >Kristen Protestan</option>
                          <option value="Kristen Katolik" >Kristen Katolik</option>
                          <option value="Hindu" >Hindu</option>
                          <option value="Budha" >Budha</option>
                          <option value="Khonghucu" >Khonghucu</option>
                        </select>
                        </fieldset>
                        </div>
                    </div>
                    {{-- END COL 6 --}}

                    {{-- COL 7 --}}
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="pendidikan[]">Pendidikan Terakhir</label>
                        <fieldset class="form-group">
                        <select required class="form-select" name="pendidikan[]" id="pendidikan[]">
                          <option>== Pilih Pendidikan Terakhir ==</option>
                          <option value="TAMAT SD/SEDERAJAT">TAMAT SD/SEDERAJAT</option>
                          <option value="TIDAK/BELUM SEKOLAH">TIDAK/BELUM SEKOLAH</option>
                          <option value="SLTA/SEDERAJAT">SLTA/SEDERAJAT</option>
                          <option value="SLTP/SEDERAJAT">SLTP/SEDERAJAT</option>
                          <option value="BELUM TAMAT SD/SEDERAJAT">BELUM TAMAT SD/SEDERAJAT</option>
                          <option value="DIPLOMA IV/STRATA I">DIPLOMA IV/STRATA I</option>
                          <option value="DIPLOMA I/II">DIPLOMA I/II</option>
                          <option value="AKADEMI/DIPLOMA III/S. MUDA">AKADEMI/DIPLOMA III/S. MUDA</option>
                          <option value="STRATA II">STRATA II</option>
                          <option value="STRATA III">STRATA III</option>
                        </select>
                        </fieldset>
                        </div>
                    </div>
                    {{-- END COL 7 --}}

                    {{-- COL 8 --}}
                    <div class="col-md-6">
                        <div class="form-group">
                        <label for="pekerjaan[]">Pekerjaan</label>
                        <input required type="text" class="form-control" id="pekerjaan[]" name="pekerjaan[]" placeholder="Masukan Pekerjaan"/>
                        </div>
                    </div>
                    {{-- END COL 8 --}}

                    {{-- ROW --}}
                        <div class="col-md-2">
                            <div class="form-group">
                            <label for="goldar[]">Golongan Darah</label>
                            <fieldset class="form-group">
                                <select required class="form-select" name="goldar[]" id="goldar[]">
                                    <option>== Goldar ==</option>
                                    <option value=" ">Tidak Tahu</option>
                                    <option value="A">A</option>
                                    <option value="B">B</option>
                                    <option value="AB">AB</option>
                                    <option value="O">O</option>
                                </select>
                            </fieldset>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                            <label for="status_perkawinan[]">Status Perkawinan</label>
                            <fieldset class="form-group">
                                <select required class="form-select" name="status_perkawinan[]" id="status_perkawinan[]">
                                    <option>== Pilih Status ==</option>
                                    <option value="Belum Kawin">Belum Kawin</option>
                                    <option value="Kawin Belum Tercatat">Kawin Belum Tercatat</option>
                                    <option value="Kawin Tercatat">Kawin Tercatat</option>
                                    <option value="Cerai Hidup">Cerai Hidup</option>
                                    <option value="Cerai Mati">Cerai Mati</option>
                                </select>
                            </fieldset>
                            </div>
                        </div>

                        <div class="col-md-5">
                            <div class="form-group">
                                <label for="tanggal_perkawinan[]">Tanggal Perkawinan</label>
                                <input required type="date" class="form-control" id="tanggal_perkawinan[]" name="tanggal_perkawinan[]" placeholder="Masukan Tanggal Perkawinan"/>
                            </div>
                        </div>
                    {{-- END ROW --}}

                    {{-- COL - 10 --}}
                        <div class="col-md-4">
                            <div class="form-group">
                                <label for="status_hubungan[]">Status Hubungan</label>
                                <input required type="text" class="form-control" id="status_hubungan[]" name="status_hubungan[]" placeholder="Masukan Status Hubungan"/>
                            </div>
                        </div>
                    {{--  END COL - 10 --}}

                    {{-- COL - 11 --}}
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="nama_orang_tua[]">Nama Orang Tua</label>
                                <input required type="text" class="form-control" id="nama_orang_tua[]" name="nama_orang_tua[]" placeholder="cth: Andi/Lilis"/>
                            </div>
                        </div>
                    {{--  END COL - 11 --}}

                    {{-- COL - 12 --}}
                        <div class="col-md-3">
                            <div class="form-group">
                                <label for="kewarganegaraan[]">Kewarganegaraan</label>
                                <fieldset class="form-group">
                                <select required class="form-select" name="kewarganegaraan[]" id="kewarganegaraan[]">
                                    <option>== Pilih Kewarganegaraan ==</option>
                                    <option value="WNI">WNI</option>
                                    <option value="WNA">WNA</option>
                                </select>
                            </fieldset>
                            </div>
                        </div>
                    {{--  END COL - 12 --}}

                    {{-- COL - 13 --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_paspor[]">No Paspor</label>
                                <input required type="text" class="form-control" id="no_paspor[]" name="no_paspor[]" placeholder="isi - jika tidak ada"/>
                            </div>
                        </div>
                    {{--  END COL - 13 --}}


                    {{-- COL - 14 --}}
                        <div class="col-md-6">
                            <div class="form-group">
                                <label for="no_kitap[]">No Kitap</label>
                                <input required type="text" class="form-control" id="no_kitap[]" name="no_kitap[]" placeholder="isi - jika tidak ada"/>
                            </div>
                        </div>
                    {{--  END COL - 14 --}}
                    
                    </div>
                {{-- END ROW --}}
            `;
        }
    
        // Add the first dynamic form
        $('#dynamic-form-container').append(generateDynamicForm(formCount));
    
        // Add more dynamic forms on button click
        $('#add-form').click(function() {
            formCount++;
            const dynamicForm = generateDynamicForm(formCount);
            $('#dynamic-form-container').append(dynamicForm);
        });
    });
    </script>