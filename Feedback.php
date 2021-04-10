<?php

class Feedback
{
    private $_sPathPhoto;
    private $_sName;
    private $_sNationality;
    private $_sFeedbackText;
    private $_sDate;
    private $_iFeedbackValue;

    public function __construct(string $name, string $nationality, string $date, string $feedback_text, int $feedback_value, string $path = '')
    {
        $this->_sName = $name;
        $this->_sNationality = $nationality;
        $this->_sFeedbackText = $feedback_text;
        $this->_sDate = $date;
        $this->_iFeedbackValue = $feedback_value;
        $this->_sPathPhoto = $path;
    }

    public function GetName() : string
    {
        return $this->_sName;
    }

    public function GetNationality() : string
    {
        return $this->_sNationality;
    }

    public function GetFeedbackText() : string
    {
        return $this->_sFeedbackText;
    }

    public function GetDate() : string
    {
        return $this->_sDate;
    }

    public function GetFeedbackValue() : int
    {
        return $this->_iFeedbackValue;
    }

    public function GetPhoto() : string
    {
        return $this->_sPathPhoto;
    }

    public function GetNationalityFlagsURL(string $style, int $size) : string
    {
        return sprintf("https://www.countryflags.io/%s/%s/%d.png", $this->_sNationality, $style, $size);
    }

    static public function GenerateTemplate(Feedback $feedback) : void
    {
        echo '<div class="feedback">';
        echo '<p><img src="'.$feedback->GetPhoto().'"></p>';
        echo '<p class="user">';
        echo '<img src="'. $feedback->GetNationalityFlagsURL("flat", 32) . '" alt="country">';
        echo $feedback->GetName();
        echo '</p>';
        echo '<p class="date">'.$feedback->GetDate().'</p>';

        for($i = 0; $i < $feedback->GetFeedbackValue(); $i++)
            echo '<i class="fa fa-star" aria-hidden="true"></i>';

        echo '<p class="text">'.$feedback->GetFeedbackText() .'</p>';
        echo '</div>';
    }
}