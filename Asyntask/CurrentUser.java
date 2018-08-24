package company.co.kr.myapplication;


import java.lang.String;

public class CurrentUser {
    private String id;
    private String pw;
    private String name;



    public void setId(String id){
        this.id = id;
    }

    public void setPw(String pw){
        this.pw = pw;
    }

    public void setName(String name){
        this.name = name;
    }

    public String getId(){
        return this.id;
    }

    public String getPw(){
        return this.pw;
    }

    public String getName(){
        return this.name;
    }


}
