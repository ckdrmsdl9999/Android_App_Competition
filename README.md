# Android_App_Competition

구현 계획
1) 로그인 
2) 위치확인
3) 등록된 가게들과 현 자신의 위치를 비교하여 1km내외의 가게 목록 표시
- 화면 구성 : 현재 위치 ( 상단 ), 가게 위치 ( 중단 ), 커뮤니티 게시판 ( 최하단 )
- 3-1) 가게 위치의 가게를 클릭할 경우 해당 가게 들어감 < 해당 데이터들의 경우에는 각 구마다 3개 정도 입력 + 김밥천국(필수) 입력 >
4) 커뮤니티 게시판
- 게시판 보여주기 기능 : 각 입력하는 사람들의 위치정보를 등록 후 현재 사용자와의 거리가 가까운 경우에만 등록 
- 게시판 목록
- 같이 놀자 / 같이 먹자 

5) 필요한 데이터 
- 1인 식당 목록 데이터 필요

< 학습 필요 목록 >
1. 서버연동 ( 70 % ) 
1-1. 로그인 / 회원가입
1-2. 게시판 RRUD 
2. 위치 정보 이용하기
- 기본 개념
- intent와 activity 
- manifest 


< 기본 개념 정리 깃허브 >
https://github.com/mash-up-kr/android-study/tree/master/신입%20스터디
   
   
< 서버 연동 >
- 맥 apache + phpmyadmin + mysql 연동 방법 : https://lepidopodus.net/?p=115 
- 계정 : root / 암호 : 초기 설정 암호
- 서버 연동 예제 : http://gakari.tistory.com/entry/안드로이드-프로젝트3-데이터베이스-및-서버-구축
- gradle에 volley 라이브러리 추가 / manifest에 인터넷 권한 추가 
///
- AsyncTask 이용 ( 범용적 )
http://webnautes.tistory.com/829


