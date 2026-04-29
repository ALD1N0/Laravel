<?php

namespace App\Notifications;

use Illuminate\Bus\Queueable;
use Illuminate\Notifications\Notification;
use Illuminate\Notifications\Messages\MailMessage;

class PembayaranNotification extends Notification
{
    use Queueable;

    protected $pembayaran;

    public function __construct($pembayaran)
    {
        $this->pembayaran = $pembayaran;
    }

    public function via($notifiable)
    {
        return ['mail', 'database']; // Kirim lewat email dan simpan di database
    }

    public function toMail($notifiable)
    {
        return (new MailMessage)
                    ->line('Pembayaran Anda telah berhasil diproses.')
                    ->action('Lihat Pembayaran', url('/pembayaran/'.$this->pembayaran->id))
                    ->line('Terima kasih telah menggunakan sistem kami.');
    }

    public function toDatabase($notifiable)
    {
        return [
            'pembayaran_id' => $this->pembayaran->id,
            'jumlah' => $this->pembayaran->jumlah,
            'status' => $this->pembayaran->status,
        ];
    }
}


