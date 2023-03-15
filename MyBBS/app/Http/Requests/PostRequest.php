<?php
namespace App\Http\Requests;

use Illuminate\Foundation\Http\FormRequest;
class PostRequest extends FormRequest
{
    /**
     * Determine if the user is authorized to make this request.
     *
     * @return bool
     */
    public function authorize()//ユーザー管理をして、機能の制限をしたいときに使う！
    {
        return true;
    }

    /**
     * Get the validation rules that apply to the request.
     *
     * @return array
     */
    public function rules()
    {
        return [
            //バリエーションのルール記載
            'title'=>'required|min:3',//3文字欲しいルール
            'body' =>'required',//元の状態に差し戻してくれる
        ];
    }
    //エラーメッセーじのカスタマイズをした場合定義
    public function messages()
    {
        return[
            'title.required'=>'タイトルは必須です',//エラーメッセーじの修正
            'title.min'=>':min 文字以上入力してください',//3文字以上必須の指定
            'body.required' =>'本文は必須です',//元の状態に差し戻してくれる

        ];
    }
}

// <!-- ./vendor/bin/sail artisan make:request PostRequestで作れる！ -->
