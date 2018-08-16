package kr.co.company.hello;

import android.content.Intent;
import android.net.Uri;
import android.support.v7.app.AppCompatActivity;
import android.os.Bundle;
import android.view.View;

public class MainActivity extends AppCompatActivity {

    // 안드로이드의 액티비티는 Activity 클래스로 생성
    // AppCompatActivity는 Activity Class의 child

    @Override
    protected void onCreate(Bundle savedInstanceState) {
        // onCreate() 메소드
        // 액티비티가 생성되는 순간 한번 호출되는 메소드
        // 모든 초기화 및 사용자 인터페이스 설정이 여기서 설정이 되야함
        // SavedInstanceState : 이전에 저장된 어플리케이션의 상태

        super.onCreate(savedInstanceState);
        // 부모 클래스인 AppComaptActivity 클래스의 onCreate()를 호출
        setContentView(R.layout.activity_main);
        // R.layout.activity : 리소스 식별자(id)
        // 액티비티의 화면을 설정
        // R : res
        // R.layout.activity_main 은 res.layout.activity_main과 관련

    }

    //xml에서 새로 추가한 버튼의 onClick 이벤트 추가
    // Tip : 새로운 클래스 auto import 기능 : File -> settings(preference) -> Editor -> general -> auto import -> Check all empty check boxes
    public void onClicked(View v){
        Intent intent = new Intent(Intent.ACTION_VIEW, Uri.parse("tel:010-1234-5678"));
        startActivity(intent);
    }

}
