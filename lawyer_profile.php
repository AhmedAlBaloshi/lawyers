<!DOCTYPE html>
<html lang="en">

<head>
    <?php $page = 'lawyer'; ?>
    <title>Lawyer-Profile</title>
    <?php include "layout/header.php" ?>

<body>
    <div class="wrapper">
        <?php include "layout/nav.php" ?>
        <br><br>
        <div class="container">
            <center>
                <div class="section-header">
                    <h2>John Deo</h2>
                </div>
            </center>
            <div class="row">
                <div class="col-sm-3">
                    <div class="card" style="width:250px;">
                        <img src="img/team-4.jpg" alt="Card image" style="width:100% ; height: 300px;">
                    </div>
                </div>
                <div class="col-sm-6">
                    <div style="width:500px">
                       <p class="lawyer_profile">Service :<a href="#"><Span>Criminal</Span></a></p>
                       <p class="lawyer_profile">Location :<Span>Karachi</Span></p>
                       <p class="lawyer_profile">Laywer Detail :</p>
                       <p class="detail">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries, but also the leap into electronic typesetting, remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset sheets containing Lorem Ipsum passages, and more recently with desktop publishing software like Aldus PageMaker including versions of Lorem Ipsum.</p>
                    </div>
                </div>
                <div class="col-sm-3 mb-5">
                    <input class="celender form-control" type="date" name="birthday">
                    <button class="button">Appointment</button>
                </div>
            </div>
        </div>
        <?php include "layout/footer.php" ?>

    </div>
</body>

</html>