<?php
defined('BASEPATH') or exit('No direct script access allowed');

$attributes = array('class' => 'form__container', 'id' =>'form');

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>CRUD</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/containers.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/table.css">
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/scrollUp.js"></script>
    
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

</head>

<body>
    <nav class="navigation__bar">
        <div class="search__container">
            <button class="btn__addons" onclick="up()">Up</button> <!-- se suponia que seria un searchbar pero me tarde un poco xd -->
        </div>


    </nav>

    <?php echo form_open('welcome/add', $attributes); ?>
    <!-- <form action="" method="POST" class="form__container"> -->
    <h2 style="color:#EEEEEE;" class="form__title">Add a new country</h2>
    <div class="form__item">
        <input type="text" name="code" id="code" placeholder="Code" required class="form__text">
        <input type="text" name="name" id="name" placeholder="Name" required class="form__text">

        <div class="continent__container">
            <label for="cont-id"><b>Choose a Continent:</b></label>
            <select name="cont" id="cont-id" class="dropdown__list">
                <option value="South America">South America</option>
                <option value="North America">North America</option>
                <option value="Europe">Europe</option>
                <option value="Africa">Africa</option>
                <option value="Oceania">Oceania</option>
                <option value="Antarctica">Antarctica</option>
                <option value="Asia">Asia</option>
            </select>
        </div>

    </div>
    <div class="form__item">
        <input type="text" name="region" id="reg" placeholder="Region" required class="form__text">
    </div>
    <div id="extra-input" class="extra__items">
        <input type="text" name="localname" id="local" placeholder="Local Name" class="extra__text">
        <input type="text" name="independency" id="ind" placeholder="Independency Year" class="extra__text">
        <input type="text" name="surface" id="surf" placeholder="Surface Area" class="extra__text">
        <input type="text" name="population" id="pop" placeholder="Population" class="extra__text">
        <input type="text" name="Life" id="life" placeholder="Life Expectancy" class="extra__text">
        <input type="text" name="gnp" id="gnp" placeholder="GNP" class="extra__text">
        <input type="text" name="gnpold" id="gnpold" placeholder="GNP Old" class="extra__text">
        <input type="text" name="gov" id="gov" placeholder="Government Form" class="extra__text">
        <input type="text" name="HeadOfState" id="hos" placeholder="Head Of State" class="extra__text">
        <input type="text" name="cap" id="cap" placeholder="Capital" class="extra__text">
        <input type="text" name="code2" id="code2" placeholder="Code 2" class="extra__text">
    </div>
    <div class="form__buttons">
        <label for="form-checkbox" style="color:#EEEEEE;"><b>add more information</b></label>
        <input type="checkbox" id="form-checkbox">
        <button type="submit" class="form__btn btn__addons">Save</button>
    </div>


    <?php echo form_close(); ?>

    <div class="main__title">
        <h1>Countries</h1>
        <label for="cont-id"><b>Choose a Continent:</b></label>
        <select name="views" id="views" class="dropdown__list">
            <option value="view1">page 1</option>
            <option value="view2">page 2</option>
            <option value="view3">page 3</option>
            <option value="view4">page 4</option>
        </select>
        <button id="view-btn" class="btn__addons views__btn" onclick="change_view()">change</button>
    </div>


    <div class="main__container">

        <table class="main__table">

            <thead class="table__header">
                <tr class="" id="head1">
                    <th>Code</th>
                    <th>Name</th>
                    <th>Continent</th>
                    <th>Region</th>
                    <th>Options</th>
                </tr>
                
                <tr class="header__off" id="head2">
                    <th>Code</th>
                    <th>Surface Area</th>
                    <th>Indep Year</th>
                    <th>Population</th>
                    <th>Options</th>
                </tr>

                <tr class="header__off" id="head3">
                    <th>Code</th>
                    <th>Life Expectancy</th>
                    <th>GNP</th>
                    <th>GNP Old</th>
                    <th>Options</th>
                </tr>
                
                <tr class="header__off" id="head4">
                    <th>Code</th>
                    <th>LocalName</th>
                    <th>GovernmentForm</th>
                    <th>Capital</th>
                    <th>Code2</th>
                    <th>Options</th>
                </tr>


            </thead>
            <tbody class="table__body " id="view1">
                <?php 

                    foreach ($countries as $country) {
                        echo '
                        <tr>
                            <td>'.$country->Code.'</td>
                            <td>'.$country->Name.'</td>
                            <td>'.$country->Continent.'</td>
                            <td>'.$country->Region.'</td>
                            <td> <a href="'.base_url('welcome/delete/'.$country->Code).'" class="delete__btn">Delete</a> <button class="btn__addons" style="margin-top:15px;" onclick="fill_textbox(`'.$country->Code.'`, `'.$country->Name.'`, `'.$country->Continent.'`, `'.$country->Region.'`,`'.$country->LocalName.'`,`'.$country->IndepYear.'`, `'.$country->SurfaceArea.'`, `'.$country->Population.'`, `'.$country->LifeExpectancy.'`, `'.$country->GNP.'`, `'.$country->GNPOld.'`, `'.$country->GovernmentForm.'`, `'.$country->Capital.'`, `'.$country->Code2.'`)">Edit</button> </td>
                        </tr>
                        
                        ';
                    }

                ?>

            </tbody>

            <tbody class="table__body view__off" id="view2">
                <?php
                    foreach ($countries as $country) {
                        echo '
                        <tr>
                            <td>'.$country->Code.'</td>
                            <td>'.$country->SurfaceArea.'</td>
                            <td>'.$country->IndepYear.'</td>
                            <td>'.$country->Population.'</td>
                            <td> <a href="'.base_url('welcome/delete/'.$country->Code).'" class="delete__btn">Delete</a> <button class="btn__addons" style="margin-top:15px;" onclick="fill_textbox(`'.$country->Code.'`, `'.$country->Name.'`, `'.$country->Continent.'`, `'.$country->Region.'`,`'.$country->LocalName.'`,`'.$country->IndepYear.'`, `'.$country->SurfaceArea.'`, `'.$country->Population.'`, `'.$country->LifeExpectancy.'`, `'.$country->GNP.'`, `'.$country->GNPOld.'`, `'.$country->GovernmentForm.'`, `'.$country->Capital.'`, `'.$country->Code2.'`)">Edit</button> </td>
                        </tr>
                ';
                }
                ?>
            </tbody>

            <tbody class="table__body view__off" id="view3">
            <?php
                    foreach ($countries as $country) {
                        echo '
                        <tr>
                            <td>'.$country->Code.'</td>
                            <td>'.$country->LifeExpectancy.'</td>
                            <td>'.$country->GNP.'</td>
                            <td>'.$country->GNPOld.'</td>
                            <td> <a href="'.base_url('welcome/delete/'.$country->Code).'" class="delete__btn">Delete</a> <button class="btn__addons" style="margin-top:15px;" onclick="fill_textbox(`'.$country->Code.'`, `'.$country->Name.'`, `'.$country->Continent.'`, `'.$country->Region.'`,`'.$country->LocalName.'`,`'.$country->IndepYear.'`, `'.$country->SurfaceArea.'`, `'.$country->Population.'`, `'.$country->LifeExpectancy.'`, `'.$country->GNP.'`, `'.$country->GNPOld.'`, `'.$country->GovernmentForm.'`, `'.$country->Capital.'`, `'.$country->Code2.'`)">Edit</button> </td>
                        </tr>
                    '; }
                ?>
            </tbody>

            <tbody class="table__body view__off" id="view4">
            <?php
                    foreach ($countries as $country) {
                        echo '
                        <tr>
                            <td>'.$country->Code.'</td>
                            <td>'.$country->LocalName.'</td>
                            <td>'.$country->GovernmentForm.'</td>
                            <td>'.$country->Capital.'</td>
                            <td>'.$country->Code2.'</td>
                            <td> <a href="'.base_url('welcome/delete/'.$country->Code).'" class="delete__btn">Delete</a> <button class="btn__addons" style="margin-top:15px;" onclick="fill_textbox(`'.$country->Code.'`, `'.$country->Name.'`, `'.$country->Continent.'`, `'.$country->Region.'`,`'.$country->LocalName.'`,`'.$country->IndepYear.'`, `'.$country->SurfaceArea.'`, `'.$country->Population.'`, `'.$country->LifeExpectancy.'`, `'.$country->GNP.'`, `'.$country->GNPOld.'`, `'.$country->GovernmentForm.'`, `'.$country->Capital.'`, `'.$country->Code2.'`)">Edit</button> </td>
                        </tr> 
                '; }
                ?>
            </tbody>

        </table>
    </div>


    <script type="text/javascript" src="<?php echo base_url()?>assets/js/Tviews.js"></script>
    <script type="text/javascript">
        let url = "<?php echo base_url('welcome/Edit'); ?>";

        function fill_textbox(code, name, cont, region, local, indep, surf, popul, life, gnp, gnpold, gov, headof, capital, code2){
            document.getElementById("form-checkbox").checked = true;
            const extraDiv = document.getElementById("extra-input");
            const form = document.getElementById("form");
            
            let path = url + "/" + code;
            form.setAttribute('action', path);
            extraDiv.style = "display: flex;";
            document.getElementById("code").value = code;
            document.getElementById("name").value = name;
            document.getElementById("cont-id").value = cont;
            document.getElementById("reg").value = region;
            document.getElementById("local").value = local;
            document.getElementById("ind").value = indep;
            document.getElementById("surf").value = surf;
            document.getElementById("pop").value = popul;
            document.getElementById("life").value = life;
            document.getElementById("gnp").value = gnp;
            document.getElementById("gnpold").value = gnpold;
            document.getElementById("gov").value = gov;
            document.getElementById("hos").value = headof;
            document.getElementById("cap").value = capital;
            document.getElementById("code2").value = code2;
            
            window.scrollTo(0, 0);
        }
    </script>
    <script type="text/javascript" src="<?php echo base_url()?>assets/js/extraInput.js"></script>
</body>

</html>