<?php
namespace algo;

class questionList{

    protected array $list = [];

    public function __construct($listQuestion = [])
    {
        $this->list = $listQuestion;
    }

    /**
     * @return array
     */
    public function getList(): array
    {
        return $this->list;
    }


    public function parse($path){
        $contents = file_get_contents($path);
        $questions = explode("#####",$contents);
        array_shift($questions);
        foreach ($questions as $ques){
            $content = explode("####",$ques);
            $this->list[] = new Question($content[0],$content[1]);
        }
        return $this;
    }

    public function getQuestion(int | array $indexes){
        return $this->list[$indexes] ?: throw new Exception("No have question");
    }

    public function all()
    {
        $this->list;
    }

}

