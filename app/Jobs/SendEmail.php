<?php

namespace App\Jobs;

use App\Mail\Send;
use App\Mail\SendMail;
use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldBeUnique;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Foundation\Bus\Dispatchable;
use Illuminate\Queue\InteractsWithQueue;
use Illuminate\Queue\SerializesModels;

class SendEmail implements ShouldQueue
{
    use Dispatchable, InteractsWithQueue, Queueable, SerializesModels;
    protected $mail;
    /**
     * Create a new job instance.
     *
     * @return void
     */
    public function __construct($mail)
    {
        $this->mail = $mail;
    }

    /**
     * Execute the job.
     *
     * @return void
     */
    public function handle()
    {
        $email = new Send($this->mail);
        $email->subject('Đăng ký nhận thông tin và tham quan bất động sản THE NINE');
        $email->from('thenine@haiphatland.com.vn', 'Chung cư The Nine - Số 9 Phạm Văn Đồng');
        $result = \Mail::to('tuanvk@haiphatland.com.vn')->cc(['tuanvk.tmq@gmail.com']);
        $result->send($email);
    }
}
