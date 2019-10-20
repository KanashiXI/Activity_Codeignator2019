<div class="container">
    <h3>แก้ไขกิจกรรม</h3>
    <br>
    <div class="row">
        <div class="col-md-12">
            <?php echo form_open('activity/save', 'method="POST"') ?>
                <div class="row">
                    <input type="hidden" class="form-control" name="activity_id" placeholder="activity_id" 
                                    value="<?php echo $activity_data->activity_id ?>">

                    <div class="col-md-6 form-group">
                        <label for="exampleInputEmail1">ชื่อกิจกรรม</label>
                        <input type="text" class="form-control" name="activity_name" placeholder="ชื่อกิจกรรม" 
                                    value="<?php echo $activity_data->activity_name ?>">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="exampleInputEmail1">วันที่เริ่มกิจกรรม</label>
                        <input type="text" class="form-control" name="start_date" placeholder="วันที่เริ่มกิจกรรม" 
                                value="<?php echo $activity_data->start_date ?>">
                    </div>
                    <div class="col-md-3 form-group">
                        <label for="exampleInputEmail1">วันที่สิ้นสุดกิจกรรม</label>
                        <input type="text" class="form-control" name="end_date" placeholder="วันที่สิ้นสุดกิจกรรม"
                                value="<?php echo $activity_data->end_date ?>">
                    </div>
                </div>
                <div class="row">
                    <div class="col-md-12">
                    <button class="btn btn-success" type="submit">บันทึก</button>
                    <a href="<?php echo base_url('activity/'); ?>" class="btn btn-outline-secondary" type="button">ยกเลิก</a>
                    </div>
                </div>    
            <!-- </form> -->
        </div>    
    </div> 