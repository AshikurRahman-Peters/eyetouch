
        <!--Table Part Start-->
        <div class="card mb-3" id="userTable" style="width: 100%;">
            <div class="card-header">
                <i class="fas fa-table"></i>
                All Featured List</div>
            <span id="updateTable">
        <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered" id="dataTable" width="100%" >
                <thead>
                <tr>
                    <th style="width: 5%">No.</th>
                    <th style="width: 20%">Name</th>
                    <th style="width: 10%">E-mail</th>
                    <th style="width: 25%">Phone</th>
                    <th style="width: 20%">sub</th>
                    <th style="width: 20%">Description</th>
                    <th style="width: 20%">Action</th>
                </tr>
                </thead>
                <tbody id="tableData">

                <?php
                $message=$this->db->query("select * from tbl_message where message_status=1")->result();
                if(isset($message)):
                    $i = 1;
                    foreach($message as $featured):
                        ?>
                        <tr>
                    <td><?php echo $i++; ?></td>
                    <td><?php echo $featured->message_name ?></td>
                    <td><?php echo $featured->message_mail ?></td>
                    <td><?php echo $featured->message_phone ?></td>
                    <td><?php echo $featured->message_sub ?></td>
                    <td><?php echo $featured->message ?></td>
                    
                    <td>
                        <!-- <a href="<?php //echo base_url() ?>edit_featured/<?php //echo $featured->id ?>" class="btn btn-warning" d >edit<i class="fa fa-pencil-square-o" aria-hidden="true"></i></a> -->

                            <a onclick="return confirm('Are you sure to delete this data ? ')"
                               href="<?php echo base_url() ?>message_update/<?php echo $featured->message_id ?>"  title="Delete This"  class="btn btn-danger ">delete<i class="fa fa-trash-o" aria-hidden="true"></i></a>

                    </td>
                </tr>
                    <?php endforeach; endif; ?>

                </tbody>
            </table>
        </div>
    </div>
    </span>
        </div>

        <!--Table Part End-->

        <!-- Dynamic Body Content End -->
        <!-- ============================================================================ -->

    </div>
</div>