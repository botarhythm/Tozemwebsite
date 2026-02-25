---
name: notebooklm-manual-sync
description: NotebookLMで生成したスライド（PDFマニュアル）を本プロジェクトのWordPressテーマにインポートし、実装・デプロイするための自動化フロー。マニュアル更新時に呼び出します。
---

# NotebookLM Manual Sync Flow

管理マニュアルのMarkdownテキストを元に、NotebookLM（またはユーザー）が作成した詳細なスライド版PDFマニュアルを、TozemプロジェクトのWordPressテーマに安全に組み込みデプロイする標準ワークフローです。

## Trigger (発動条件)

ユーザーが「PDFマニュアルをアップデートしました」「NotebookLMでマニュアルを作成しました」「PDFを実装して」など、新しく生成されたPDFマニュアルファイル（例：`Tozem_Website_Management_Manual.pdf`）のプロジェクトへの反映を要求した際に実行します。

## Workflow Instructions

1.  **PDFファイルの配置確認**
    - ユーザーがプロジェクトルート（`c:\Users\seamo\Documents\gemini\Tozem-Website\`）に最新のPDFファイル（例：`Tozem_Website_Management_Manual.pdf`）を配置していることを確認します。

2.  **テーマの assets フォルダへのコピー (Execution)**
    - 対象ファイル名：`Tozem_Website_Management_Manual.pdf`
    - コピー先：`wordpress-theme/assets/`
    - `Copy-Item` コマンド等を使用して安全にコピーまたは上書きします。

3.  **テーマバージョンの引き上げ (Version Bump)**
    - キャッシュによる古いPDFの表示を防ぐため、`wordpress-theme/style.css` の `Version:` 番号を必ず `0.1` 引き上げます（例: 2.7 -> 2.8）。

4.  **Markdownマニュアルのリンク確認・更新 (Link Verification)**
    - `wordpress_settings_manual.md` などのテキストマニュアル内に記載されているPDFへのリンクが、正しいホスティングURLになっているか確認します。
    - 期待されるURL: `https://tozem.net/wp-content/themes/wordpress-theme/assets/Tozem_Website_Management_Manual.pdf`

5.  **デプロイ用ZIPファイルの生成 (Package for Deployment)**
    - `Compress-Archive` 等を用いて、`wordpress-theme` フォルダ全体を `wordpress-theme.zip` としてプロジェクトルートに再圧縮します（`-Force` オプションで上書き）。

6.  **ユーザーへのアップロード依頼 (User Handoff)**
    - 全ての処理が完了したことをユーザーに報告し、生成された `wordpress-theme.zip` をXserver上のWordPress（外観＞テーマ）へ手動アップロードして上書きするよう案内します。

## Rules / Best Practices

*   **絶対パスの利用**: スクリプトやコマンドを実行する際は、カレントディレクトリに依存せず、常に絶対パス（`c:\Users\seamo\Documents\gemini\Tozem-Website\...`）を使用して事故を防ぎます。
*   **ファイル名の一貫性**: PDFのファイル名は将来的なアクセスパス変更を防ぐため、基本的に `Tozem_Website_Management_Manual.pdf` に固定して運用することが推奨されます。
*   **バージョンの更新漏れ防止**: PDFの中身だけを差し替えた場合、Xserverやブラウザのキャッシュにより古いファイルが配信され続けるトラブルが多発します。工程3の「Version Bump」は絶対にスキップしないでください。
