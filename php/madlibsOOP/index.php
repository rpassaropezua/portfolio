<!DOCTYPE html>
<html lang="en">
    <head>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
        <link rel="stylesheet" href="styles.css" type="text/css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        <div class="container">
            <div class="jumbotron text-center">
                <h1>MADLIBS!</h1>
            </div>
            
            <div class="row">
                <?php
                    require_once('MadLibs.php');
                    $madlibs_engine = new MadLibs();
                    
                    if(isset($_POST['submit'])) {
                        
                        $madlibs_engine->setNoun($_POST['noun']);
                        $madlibs_engine->setVerb($_POST['verb']);
                        $madlibs_engine->setAdjective($_POST['adjective']);
                        $madlibs_engine->setAdverb($_POST['adverb']);
                        
                        if(!empty($_POST['noun']) && !empty($_POST['verb']) && !empty($_POST['adjective']) && !empty($_POST['adverb'])) {
                        
                            $first_section_array = [0 => "Do you ",
                                                    1 => "Do we ",
                                                    2 => "Do they "];
                                                    
                            $second_section_array = [0 => " with your ", 
                                                     1 => " with our ",
                                                     2 => " with their "];
                                                     
                            $third_section_array = [0 => "? That is hilarious!",
                                                    1 => "? That is not good!",
                                                    2 => "? That is a problem!",
                                                    3 => "? That is great!"];
                                                    
                            $first_random = rand(0, 2);
                            $second_random = rand(0, 2);
                            $third_random = rand(0, 3);
                            
                            $madlibs_engine->cleanProperties();
                            
                            $madlibs_engine->setStory($first_section_array[$first_random] .
                                                      $madlibs_engine->getVerb() .
                                                      $second_section_array[$second_random] .
                                                      $madlibs_engine->getAdjective() .
                                                      " " . $madlibs_engine->getNoun() .
                                                      " " . $madlibs_engine->getAdverb() .
                                                      $third_section_array[$third_random]);
                                                      
                            $madlibs_engine->storeProperties();
                        } else {
                            
                            echo '<div class="col-sm-4 col-sm-offset-4 alert alert-danger text-center"><strong>Please fill out all the fields!</strong></div>';
                            
                        }
                                                  
                    }
                    
                ?>
                <div class="col-sm-12 text-center">
                    <form enctype="multipart/form-data" method="post" class="form-horizontal" action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']); ?>" >
                        <div class="form-group">
                            <label class="control-label col-sm-offset-3 col-sm-2" for="noun">Noun</label>
                            <div class="col-sm-2">
                                <input type="text" name="noun" class="form-control" value="<?php if(!empty($madlibs_engine->getNoun())) echo $madlibs_engine->getNoun(); ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-offset-3 col-sm-2" for="verb">Verb</label>
                            <div class="col-sm-2">
                                <input type="text" name="verb" class="form-control" value="<?php if(!empty($madlibs_engine->getVerb())) echo $madlibs_engine->getVerb(); ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-offset-3 col-sm-2" for="adjective">Adjective</label>
                            <div class="col-sm-2">
                                <input type="text" name="adjective" class="form-control" value="<?php if(!empty($madlibs_engine->getAdjective())) echo $madlibs_engine->getAdjective(); ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label class="control-label col-sm-offset-3 col-sm-2" for="adverb">adverb</label>
                            <div class="col-sm-2">
                                <input type="text" name="adverb" class="form-control" value="<?php if(!empty($madlibs_engine->getAdverb())) echo $madlibs_engine->getAdverb(); ?>" />
                            </div>
                        </div>
                        <div class="form-group">
                            <div class="col-sm-offset-5 col-sm-2">
                                <button type="submit" class="btn btn-success" value="Submit" name="submit">Submit</button>
                                <button type="clear" class="btn btn-danger">Clear</button>
                            </div>
                        </div>
                    </form>
                    <div class="col-sm-offset-4 col-sm-5">
                        <?php
                            $data = $madlibs_engine->getStoriesFromDB();
                            
                            $madlibs_engine->formatStories($data);
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
    
</html>