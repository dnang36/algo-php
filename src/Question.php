<?php
namespace algo;

class question{
    public string $question;
    public string $answer;

    public function __construct(string $ques, string $ans)
    {
        $this->question=$ques;
        $this->answer=$ans;
    }

    /**
     * @return string
     */
    public function getQuestion(): string
    {
        return $this->question;
    }

    /**
     * @return string
     */
    public function getAnswer(): string
    {
        return $this->answer;
    }
}