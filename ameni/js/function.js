function verif()
{
    if((document.f.Title.value.length==0))
    {
        alert("titre invalide");
        return false;
    }
    if((document.f.Score.value.length==0))
    {
        alert("score invalide");
        return false;
    }
    if((document.f.Question.value.length==0))
    {
        alert("question invalide");
        return false;
    }
    
    if((document.f.Answer.value.length==0))
    {
        alert("reponse invalide");
        return false;
    }
    if((document.f.RightAnswerNumber.value.length==0)||(isNaN(document.f.RightAnswerNumber)))
    {
        alert("reponse invalid");
        return false;
    }
}