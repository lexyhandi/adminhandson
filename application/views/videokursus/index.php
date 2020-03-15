<div class="app-main__outer">
    <div class="app-main__inner">
        <div class="app-page-title">
            <div class="page-title-wrapper">
                <div class="page-title-heading">
                    <div>Manage video kursus
                        <div class="page-title-subheading">
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="main-card mb-3 card">
            <div class="card-body">
                <table style="width: 100%;" id="example" class="table table-hover table-striped table-bordered">
                    <thead>
                        <tr>
                            <th>ID</th>
                            <th>Judul Kursus</th>
                            <th>Jumlah Video</th>
                            <th>Menu</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        foreach ($kursus as $row) {
                            echo "<tr>";
                            echo "<td>" . $row->id_kursus . "</td>";
                            echo "<td>" . $row->kursus . "</td>";
                            echo "<td>" . $this->m_videokursus->display_jumlah($row->id_kursus) . "</td>";

                        ?>
                            <td>
                                <a href="videokursus/manage/<?= $row->id_kursus ?>" class="badge badge-primary ">Manage Video</a>
                            </td>
                        <?php
                            echo "</tr>";
                        }
                        ?>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>