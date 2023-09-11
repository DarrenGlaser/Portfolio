<!-- MEMBERS INDEX -->
<main>
    <div class="container">
        <div class="row">
            
            <div class="col-md-12 text-center">
                <?php perch_content('Title Intro'); ?>
            </div>
            
            <div class="col-md-4">
                <?php if (perch_member_logged_in()) { ?>	
				<ul>
					<li><a href="/members/profile">Edit profile</a></li>
					<li><a href="/members/logout">Log out</a></li>
				</ul>

			    <?php
                    } else {
                        perch_members_login_form();	
				    }
			     ?>
            </div>
            
            <div class="col-md-8">
                <?php 
                    if (perch_member_logged_in()) {
                        echo '<h1>Welcome back, '.perch_member_get('first_name').'!</h1>';
                    } else {
                        echo '<h1>Hello!</h1>';
                        echo '<p>You are not logged in. Please login or <a href="/members/register">register</a>.</p>';
                    }
                ?>
            </div>
            
        </div>
    </div>
</main>
<!-- MEMBERS INDEX END -->
