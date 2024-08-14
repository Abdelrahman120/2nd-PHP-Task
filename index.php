<?php

if(isset($_GET['errors'])){
    $errors = json_decode($_GET['errors'],true);
}
if(isset($_GET['old_data'])){
    $old_data = json_decode($_GET['old_data'],true);
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>TASK1</title>
</head>

<body>

    <div class="container">
        <h1 class="text-center">Task 1</h1>
        <form class="pb-5" action="saving.php" method="POST">
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">First Name</label>
                <input type="text" class="form-control" name="firstname" id="exampleInputEmail1" aria-describedby="emailHelp"
                value="<?php $val=isset($old_data['firstname'])? $old_data['firstname']:'';echo $val; ?>">
                <span class="text-danger">
                    <?php $error=isset($errors['firstname'])? $errors['firstname']: ''; echo $error; ?>
                </span>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">last Name</label>
                <input type="text" class="form-control" name="lastname" id="exampleInputEmail1" aria-describedby="emailHelp"
                value="<?php $val=isset($old_data['lastname'])? $old_data['lastname']:'';echo $val; ?>">
                <span class="text-danger">
                    <?php $error=isset($errors['lastname'])? $errors['lastname']: ''; echo $error; ?>
                </span>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">Address</label>
                <input class="form-control"  name="address" id="exampleInputEmail1" aria-describedby="emailHelp"
                value="<?php $val=isset($old_data['address'])? $old_data['address']:'';echo $val; ?>"></input>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Gender : </label>
                <select class="form-control" name="gender" id="">
                    <option value="Male">Male</option>
                    <option value="Female">Female</option>
                </select>
                <span class="text-danger">
                    <?php $error=isset($errors['gender'])? $errors['gender']: ''; echo $error; ?>
                </span>
            </div>
            <div class="mb-3">
                <label for="" class="form-label">Country : </label>
                <select class="form-control" name="country" id="">
                    <option value="Egypt">Egypt</option>
                    <option value="Palastene">Palastene</option>
                    <option value="Deutchland">Deutchland</option>
                    <option value="England">England</option>
                </select>
            </div>


            <div class="mb-3">
                <label for="skills">Skills:</label>
                <div>
                    <input type="checkbox" id="php" name="skills[]" value="PHP">
                    <label class="me-2" for="php">PHP</label>
                    <input type="checkbox" id="mysql" name="skills[]" value="MySQL">
                    <label for="mysql">MySQL</label>
                </div>
                <div>
                    <input type="checkbox" id="javascript" name="skills[]" value="JavaScript">
                    <label for="javascript" class="me-4">JS</label>
                    <input type="checkbox" id="javascript" name="skills[]" value="c++">
                    <label for="javascript">C++</label>
                </div>
            </div>

            <div class="mb-3">
                <label for="exampleInputEmail1" class="form-label">User Name</label>
                <input name="username" type="text" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp"
                value="<?php $val=isset($old_data['username'])? $old_data['username']:'';echo $val; ?>">
                <span class="text-danger">
                    <?php $error=isset($errors['username'])? $errors['username']: ''; echo $error; ?>
                </span>
            </div>

            <div class="mb-3">
                <label for="exampleInputPassword1" class="form-label">Password</label>
                <input name="password" type="password" class="form-control" id="exampleInputPassword1">
                <span class="text-danger">
                    <?php $error=isset($errors['password'])? $errors['password']: ''; echo $error; ?>
                </span>
            </div>

            <div class="mb-3">
                <label for="" class="form-label">Department : </label>
                <input type="text" name="department" value="Open Source" class="form-control" placeholder="Open Source" readonly>
            </div>   
            <div class="mb-3 form-check">
                <input type="checkbox" class="form-check-input" id="exampleCheck1">
                <label class="form-check-label" for="exampleCheck1">Check me out</label>
            </div>
            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="reset" class="btn btn-danger">Reset</button>

        </form>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
</body>

</html>