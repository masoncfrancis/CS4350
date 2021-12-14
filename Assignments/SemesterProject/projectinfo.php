<?php
include "include/db.php";
$data = [];
$active_selected = "";
$inactive_selected = "";
if (isset($_GET['proj'])) {
    $query = "SELECT * FROM suusaprojecttracker.projects WHERE id = {$_GET['proj']}";

    if ($result = $mysqli->query($query)) {
        while ($row = mysqli_fetch_array($result)) {
            $data = $row;
            switch ($row['is_active']){
                case '0':
                    $inactive_selected = "selected";
                    breakl;
                case '1':
                    $active_selected = "selected";
                    break;
                default:
                    break;
            }
        }
    }
} else {
    http_response_code(400);
    die();
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Project Info - SUUSA Project Tracker</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/jquery@3.5.1/dist/jquery.slim.min.js"
            integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj"
            crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
            integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns"
            crossorigin="anonymous"></script>
</head>
<body>
    <div class="container-fluid">
        <?php
        echo file_get_contents("sources/navbar.html");
        ?>

        <form method="post" action="proc/projproc.php" id="projForm">
            <div class="form-row">
                <div class="col form-group">
                    <h3>Project Info</h3>
                    <input type="hidden" value="<?php echo $data['id']; ?>" name="projId">
                </div>
            </div>

            <div class="form-row">
                <div class="col form-group">
                    <label for="projectName">Project Name: </label>
                    <input class="form-control" type="text" id="projectName" name="projectName"
                           value="<?php echo $data['name']; ?>">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group col-4">
                    <label for="sponsorName">Sponsor Name:</label>
                    <input class="form-control" type="text" id="sponsorName" name="sponsorName"
                           value="<?php echo $data['sponsor_name']; ?>">
                </div>
                <div class="form-group col-4">
                    <label for="cosponsorName">Co-Sponsor Name:</label>
                    <input class="form-control" type="text" id="cosponsorName" name="cosponsorName"
                           value="<?php echo $data['cosponsor_name']; ?>">
                </div>
                <div class="form-group col-4">
                    <label for="authorName">Author Name:</label>
                    <input class="form-control" type="text" id="authorName" name="authorName"
                           value="<?php echo $data['author_name']; ?>">
                </div>
            </div>
            <div class="form-row">
                <div class="form-group col-4">
                    <label for="sponsorPosition">Sponsor Position:</label>
                    <input class="form-control" type="text" id="sponsorPosition" name="sponsorPosition"
                           value="<?php echo $data['sponsor_position']; ?>">
                </div>
                <div class="form-group col-4">
                    <label for="cosponsorPosition">Co-Sponsor Position:</label>
                    <input class="form-control" type="text" id="cosponsorPosition" name="cosponsorPosition"
                           value="<?php echo $data['cosponsor_position']; ?>">
                </div>
                <div class="form-group col-4">
                    <label for="authorPosition">Author Position:</label>
                    <input class="form-control" type="text" id="authorPosition" name="authorPosition"
                           value="<?php echo $data['author_position']; ?>">
                </div>
            </div>


            <div class="form-row">
                <div class="col form-group">
                    <label for="billText">Bill Text:</label>
                    <textarea class="form-control" rows="5" id="billText"
                              name="billText"> <?php echo $data['bill_text']; ?></textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="col form-group">
                    <label for="keyPeople">Key People and Contact Info:</label>
                    <textarea class="form-control" rows="5" id="keyPeople"
                              name="keyPeople"> <?php echo $data['people_contact']; ?> </textarea>
                </div>
            </div>

            <div class="form-row">
                <div class="col form-group">
                    <label for="projState">Project State: </label>
                    <select id="projState" class="form-control" name="isActive">
                        <option value="1" value="<?php echo $active_selected; ?>">Active</option>
                        <option value="0" value="<?php echo $inactive_selected; ?>">Inactive</option>
                    </select>
                    <script>
                        $(document).ready(function () {
                            $('#projForm').submit(function (e) {
                                changeSaveButton(1);
                            });
                        });

                        function changeSaveButton(option) {
                            const saveBtn = document.getElementById('saveBtn');
                            console.log(option);
                            if (option === 1) {
                                saveBtn.innerHTML = `<div class="spinner-border text-light spinner-border-sm" role="status"><span class="sr-only"></span></div>&nbsp;Saving...`;
                                saveBtn.disabled = true;
                            } else if (option === 2) {
                                saveBtn.innerHTML = "Save Changes...";
                                saveBtn.disabled = false;
                            }
                        }
                    </script>
                </div>
            </div>

            <div class="form-row justify-content-end">
                <div class="col-auto">
                    <button class="btn btn-primary" type="submit" id="saveBtn">Save Changes</button>
                </div>
            </div>
    </div>
    </form>

</body>
</html>