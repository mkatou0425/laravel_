# The-View
 お問い合わせフォームです。<br >
 レスポンシブ対応しているのでスマホからもご確認いただけます。
 <img width="1400" alt="スクリーンショット 2020-05-07 0 06 18" src="https://user-images.githubusercontent.com/60876388/81193748-c51d9b00-8ff6-11ea-9981-46789f016300.png">
 <img width="350" height="700" src= "https://user-images.githubusercontent.com/60876388/81476543-643bd000-924d-11ea-9d26-cac305ca9f91.jpeg">

# 使用技術
- PHP 8.1.10
- laravel 9.35.1
- MySQL 5.7
- xampp 8.1.10


<!-- # AWS構成図
<img width="995" alt="スクリーンショット 2020-05-07 11 14 01" src="https://user-images.githubusercontent.com/60876388/81247155-3ccde300-9054-11ea-91eb-d06eb38a63b3.png"> -->

## CircleCi CI/CD
- Githubへのpush時に、RspecとRubocopが自動で実行されます。
- masterブランチへのpushでは、RspecとRubocopが成功した場合、EC2への自動デプロイが実行されます

# 機能一覧
- ユーザー登録、ログイン機能
- 問い合わせ新規登録機能
- 問い合わせ編集機能
- 問い合わせ削除機能
- バリデーションチェック
- ペジネーション機能
- 検索機能

<!-- # テスト
- RSpec
  - 単体テスト(model)
  - 機能テスト(request)
  - 統合テスト(feature) -->
