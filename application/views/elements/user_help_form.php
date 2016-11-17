<div class="row">

       <?php echo br(8); ?>

        <div class="col-md-6 col-md-offset-3 well">
            <?php $attributes = array("class" => "form-horizontal", "name" => "contactform");
            echo form_open("contactform/index", $attributes);?>
            <fieldset>
            <?php 

                $user_type = $this->session->userdata('user_type');

                if($user_type == 'admin'){

                    $form_name = 'User';

                }
                else{

                    $form_name = 'Admin';

                }

             ?>
            <legend><?php echo $form_name; ?> Contact Form</legend>
            <div class="form-group">
                <div class="col-md-12">
                    <label for="form_name" class="control-label"><?php echo $form_name; ?> Name</label>
                </div>
                <div class="col-md-12">
                    <?php 

                    $options = array(
                            'small'         => 'Small Shirt',
                            'med'           => 'Medium Shirt',
                            'large'         => 'Large Shirt',
                            'xlarge'        => 'Extra Large Shirt',
                    );

                    echo form_dropdown('shirts', $options, 'large');


                    ?>
                    <span class="text-danger"><?php echo form_error('form_name'); ?></span>
                </div>
                <div class="col-md-12">
                    <label for="name" class="control-label">Name</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="name" placeholder="Your Full Name" type="text" value="<?php echo set_value('name'); ?>" />
                    <span class="text-danger"><?php echo form_error('name'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label for="email" class="control-label">Email ID</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="email" placeholder="Your Email ID" type="text" value="<?php echo set_value('email'); ?>" />
                    <span class="text-danger"><?php echo form_error('email'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label for="subject" class="control-label">Subject</label>
                </div>
                <div class="col-md-12">
                    <input class="form-control" name="subject" placeholder="Your Subject" type="text" value="<?php echo set_value('subject'); ?>" />
                    <span class="text-danger"><?php echo form_error('subject'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <label for="message" class="control-label">Message</label>
                </div>
                <div class="col-md-12">
                    <textarea class="form-control" name="message" rows="4" placeholder="Your Message"><?php echo set_value('message'); ?></textarea>
                    <span class="text-danger"><?php echo form_error('message'); ?></span>
                </div>
            </div>

            <div class="form-group">
                <div class="col-md-12">
                    <input name="submit" type="submit" class="btn btn-primary" value="Send" />
                </div>
            </div>
            </fieldset>
            <?php echo form_close(); ?>
            <?php echo $this->session->flashdata('msg'); ?>
        </div>
    </div>