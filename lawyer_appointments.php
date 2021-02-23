<!DOCTYPE html>
<html lang="en">

<head>
    <?php $page = 'appointment' ?>
    <title>Lawyer-Appointments</title>
    <?php include "layout/header.php";
    if (empty($_SESSION['user']) && !isset($_SESSION['user'])) {
            header('Location:signin.php');
        }
    ?>


<body>
    <div class="wrapper">
        <?php include "layout/nav.php" ?>
        <br><br>
        <div class="container">
            <div class="section-header">
                <h2>Appointments</h2>
            </div>

            <table class="table table-hover text-center">
                <thead>
                    <tr>
                        <th scope="col">#</th>
                        <th scope="col">Client Name</th>
                        <th scope="col">Client Email</th>
                        <th scope="col">Date</th>
                        <th scope="col">Description</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <th scope="row">1</th>
                        <td>Mark</td>
                        <td>Otto</td>
                        <td>@mdo</td>
                        <td>
                            <div class="user_describe">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</div>
                        </td>
                    </tr>
                    <tr>
                        <th scope="row">2</th>
                        <td>Jacob</td>
                        <td>Thornton</td>
                        <td>@fat</td>
                        <td id="user_description">@mdo</td>
                    </tr>
                    <tr>
                        <th scope="row">3</th>
                        <td>Larry</td>
                        <td>the Bird</td>
                        <td>@twitter</td>
                        <td id="user_description">@mdo</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <br><br><br><br><br>
        <?php include "layout/footer.php" ?>

    </div>
</body>

</html>