# お問い合わせフォーム
 お問い合わせ内容の登録管理ができるサイトです。<br>
 機能としてお問い合わせ内容の作成、一覧表示、更新、削除、検索の他<br>ログイン時のパスワード認証が可能です。<br>
 レスポンシブ対応しているのでスマホからもご確認いただけます。
 
 ## トップ画面
 <img width="1128" alt="image" src="https://user-images.githubusercontent.com/115052012/197373611-f1f47b08-1da2-482f-80c9-fb549a2a5f9c.png"><br><br>

 ## お問い合わせ新規登録画面<br>
 <img width="1128" alt="image" src="https://user-images.githubusercontent.com/115052012/197466107-a8f5d9ce-511b-41ee-b022-5da2b4e4dff6.png"><br><br>
 
  ## お問い合わせ編集画面<br>
 <img width="350" height="700" src= "https://user-images.githubusercontent.com/115052012/197466486-3b195f92-b5af-46cb-aaad-ff1ca2764538.png">
 
 <br>

 # 機能一覧
- ユーザー新規登録、ログイン機能
- お問合せ機能
  - お問い合わせ一覧表示
  - お問い合わせ新規登録
  - お問い合わせ編集・更新
  - お問い合わせ削除
  - 問い合わせ検索機能
- バリデーションチェック(ユーザ新規登録時,お問い合わせ新規登録時)
- ページネーション機能(お問い合わせ一覧表示)
<br><br>

# 使用技術
- 言語
  - PHP 8.1.10
  - HTML
  - CSS
- フレームワーク
  - Laravel 9.35.1
  - Tailwindss
- DBMS
  - MySQL 5.7
- Webサーバー
  - Apache HTTP Server
- 開発環境
  - ローカル環境(WindowsOS),　VSCode
- その他
  - FactoryとFakerを利用したダミーデータの作成
  - LaravelBreezeを使用した認証機能構築
<br><br>
# 今後の実装予定/課題
- ユーザ側と管理者側のマルチログイン機能
- お問合せ内容に重要度を付加させソートできる機能
- お問合せ内容に写真を添付できる機能
- ゲストログイン機能
- ユーザー登録時にメール認証させる等、セキュリティ面の改善
- UI/UXの改善
  
