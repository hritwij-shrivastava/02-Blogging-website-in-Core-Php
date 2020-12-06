<div class="navbar2 sticky-top" id="myHeader">
        <button type="button" class="sidebarCollapse navbar-btn">
            <span id="spinnertop"></span>
            <span id="spinnermiddle"></span>
            <span id="spinnerbottom"></span>
        </button>

        <a href="../../index.php">
            <img src="../../resources/images/logo2.png" class="logo">
        </a>

        <form class="search_item" action="#">
            <input type="text" placeholder="Search" name="search">
        </form>

        <div class="drop-pos">
            <button class="homebutton-nav nav-buttons" type="button" onclick="home()">
                <svg width="1.5em" height="1.5em" style="position: relative; top: -1px;" viewBox="0 0 16 16" class="bi bi-house-door-fill"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M6.5 10.995V14.5a.5.5 0 0 1-.5.5H2a.5.5 0 0 1-.5-.5v-7a.5.5 0 0 1 .146-.354l6-6a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1 .146.354v7a.5.5 0 0 1-.5.5h-4a.5.5 0 0 1-.5-.5V11c0-.25-.25-.5-.5-.5H7c-.25 0-.5.25-.5.495z"
                    />
                    <path fill-rule="evenodd" d="M13 2.5V6l-2-2V2.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5z" />
                </svg>
            </button>
            <button class="chatbutton-nav nav-buttons">
                <svg width="1.5em" height="1.5em" style="position: relative; top: 2px; margin:auto;" viewBox="0 0 16 16" class="bi bi-chat-left-dots-fill"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M0 2a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H4.414a1 1 0 0 0-.707.293L.854 15.146A.5.5 0 0 1 0 14.793V2zm5 4a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm4 0a1 1 0 1 1-2 0 1 1 0 0 1 2 0zm3 1a1 1 0 1 0 0-2 1 1 0 0 0 0 2z"
                    />
                </svg>
            </button>

            <button class="notification-nav nav-buttons">
                <svg width="1.5em" height="1.5em" viewBox="0 0 16 16" class="bi bi-bell-fill" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path d="M8 16a2 2 0 0 0 2-2H6a2 2 0 0 0 2 2zm.995-14.901a1 1 0 1 0-1.99 0A5.002 5.002 0 0 0 3 6c0 1.098-.5 6-2 7h14c-1.5-1-2-5.902-2-7 0-2.42-1.72-4.44-4.005-4.901z"
                    />
                </svg>
            </button>

            <button class="profile-nav nav-buttons" type="button" onclick="profile()">
                <svg width="1.5em" height="1.5em" style="position: relative; top: -1px; margin:auto;" viewBox="0 0 16 16" class="bi bi-person-fill"
                    fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M3 14s-1 0-1-1 1-4 6-4 6 3 6 4-1 1-1 1H3zm5-6a3 3 0 1 0 0-6 3 3 0 0 0 0 6z" />
                </svg>
            </button>

            <button class="button-logout-navbar nav-buttons" type="button" id="dropdownMenuButton"></button>

            <div class="arrow-box" id="message">

                <button id="letter" class="invalid" type="button">
                    <div id="profile-logo" style="background-image: url('<?php echo $_SESSION['PROF'] ?>'),url('../../resources/images/profile2.svg')"></div>
                    <?php echo $_SESSION['userName'] ?>
                </button>

                <form id="addForm" action="../../resources/config_files/update_name.php" method="post">
                    <label for="fname">Display name:</label>
                    <input type="text" id="fname" name="fname">
                    <br>
                    <br>
                    <input type="button" value="Cancel" id="cancelform" class="btn btn-success">&nbsp;&nbsp;
                    <input type="submit" value="Submit" class="btn btn-primary">
                </form>
                <hr id="line">

                <label for="upload" id="uplabel">
                    <img id="uplabel-logo" src="../../resources/images/update.png" alt=""> Update Profile Picture</label>

                <form id="addForm2" action="../../resources/config_files/update_profile.php" method="post" enctype="multipart/form-data">
                    <label for="upl">Upload:</label>
                    <input type="file" name="image" class="image" id="upl" style="position: absolute; left: 60px; width: 250px; top: -5px;">
                    <br>
                    <br>
                    <input type="button" value="Cancel" id="cancelform2" class="btn btn-success">
                </form>

                <button id="bio" class="invalid" type="button">
                    <img id="bio-logo" src="../../resources/images/bio9.png" alt=""> Update Bio </button>

                <form id="addForm3" action="../../resources/config_files/update_bio.php" method="post">
                    <label for="bio">Bio:</label>
                    <input type="text" id="bioinput" name="bio" style="position: absolute; left: 60px; width: 250px; top: -5px; border: none;
                    border-bottom: 2px solid green;outline: transparent;
                    color: black;">
                    <input type="text" id="bioinput2" name="bio2" style="position: absolute; left: 60px; width: 250px; top: 40px; border: none;
                    border-bottom: 2px solid green;outline: transparent;
                    color: black;">
                    <br>
                    <br>
                    <br>
                    <br>
                    <label for="upmobno">Update Mobile Number:</label>
                    <input type="text" id="upmobno" name="upmobno" style="position: absolute; left: 180px; width: 120px; top:100px; border: none;
                    border-bottom: 2px solid green;outline: transparent;
                    color: black;">
                    <br>
                    <br>
                    <input type="button" value="Cancel" id="cancelform3" class="btn btn-success">&nbsp;&nbsp;
                    <input type="submit" value="Submit" id="submitbio" class="btn btn-primary">

                </form>

                <button id="settings" class="invalid" type="button">
                    <img id="settings-logo" src="../../resources/images/setting1.png" alt=""> Settings &amp; Privacy</button>

                <hr id="line2">

                <button id="logoutbtn" class="invalid" type="button" onclick="logout()">
                    <svg id="logoutbtn-logo" width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-box-arrow-right" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                        <path fill-rule="evenodd" d="M11.646 11.354a.5.5 0 0 1 0-.708L14.293 8l-2.647-2.646a.5.5 0 0 1 .708-.708l3 3a.5.5 0 0 1 0 .708l-3 3a.5.5 0 0 1-.708 0z"
                        />
                        <path fill-rule="evenodd" d="M4.5 8a.5.5 0 0 1 .5-.5h9a.5.5 0 0 1 0 1H5a.5.5 0 0 1-.5-.5z" />
                        <path fill-rule="evenodd" d="M2 13.5A1.5 1.5 0 0 1 .5 12V4A1.5 1.5 0 0 1 2 2.5h7A1.5 1.5 0 0 1 10.5 4v1.5a.5.5 0 0 1-1 0V4a.5.5 0 0 0-.5-.5H2a.5.5 0 0 0-.5.5v8a.5.5 0 0 0 .5.5h7a.5.5 0 0 0 .5-.5v-1.5a.5.5 0 0 1 1 0V12A1.5 1.5 0 0 1 9 13.5H2z"
                        />
                    </svg>Logout
                </button>
            </div>

        </div>
    </div>


   
    

    <div class="modal fade" id="cropImagePop" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>

                </div>
                <div class="modal-body">
                    <div class="pic_area">
                        <div id="upload-demo" class="center-block"></div>
                    </div>

                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <button type="button" id="cropImageBtn" class="btn btn-primary">Crop</button>
                </div>
            </div>
        </div>
    </div>