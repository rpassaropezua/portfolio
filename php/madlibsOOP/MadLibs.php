<?php
    require_once('connectvars.php');
    class MadLibs {
        
        private $noun;
        private $verb;
        private $adjective;
        private $adverb;
        private $story;
        
        public function setNoun($newNoun) {
            
            $this->noun = $newNoun;
            
        }
        
        public function getNoun() {
            
            return $this->noun;
            
        }
        
        public function setVerb($newVerb) {
            
            $this->verb = $newVerb;
            
        }
        
        public function getVerb() {
            
            return $this->verb;
            
        }
        
        public function setAdjective($newAdjective) {
            
            $this->adjective = $newAdjective;
            
        }
        
        public function getAdjective() {
            
            return $this->adjective;
            
        }
        
        public function setAdverb($newAdverb) {
            
            $this->adverb = $newAdverb;
            
        }
        
        public function getAdverb() {
            
            return $this->adverb;
            
        }
        
        public function setStory($newStory) {
            
            $this->story = $newStory;
            
        }
        
        public function getStory() {
            
            return $this->story;
            
        }
        
        public function cleanProperties() {
            
            $dbc = $this->connectToDatabase();
            
            $this->verb = mysqli_real_escape_string($dbc, trim($this->verb));
            $this->adjective = mysqli_real_escape_string($dbc, trim($this->adjective));
            $this->noun = mysqli_real_escape_string($dbc, trim($this->noun));
            $this->adverb = mysqli_real_escape_string($dbc, trim($this->adverb));
            
            mysqli_close($dbc);
            
        }
        
        public function storeProperties() {
            
            $dbc = $this->connectToDatabase();
                    
            $query = "INSERT INTO madlib(user_verb, user_adjective, user_noun, user_adverb, full_story) " .
                        "VALUES ('$this->verb', '$this->adjective', '$this->noun', '$this->adverb', '$this->story')";
            
            mysqli_query($dbc, $query) 
                    or die("Error storing MadLib attributes");
                    
            mysqli_close($dbc);
            
        }
        
        public function getStoriesFromDB() {
            
            $dbc = $this->connectToDatabase();
                    
            $query = "SELECT full_story, time_stamp FROM madlib ORDER BY time_stamp DESC";
            
            $data = mysqli_query($dbc, $query)
                    or die("Error pulling stories from database");
                    
            mysqli_close($dbc);
            
            return $data;
            
        }
        
        public function formatStories($data) {
            
            echo '<table class="table table-hover">';
            
            while($row = mysqli_fetch_array($data)) {
                echo '<tr><td>' . $row['full_story'] . '</td><td>' . $row['time_stamp'] . '</td></tr>';
            }
            
            echo '<table>';
            
        }
        
        public function connectToDatabase() {
            
            $dbc = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD, DB_NAME)
                    or die("Error connecting to database.");
                    
            return $dbc;
            
        }
        
        
    }


?>