<?php

namespace App\Livewire;

use Livewire\Component;
use App\Models\Webtoon;
use BaconQrCode\Renderer\ImageRenderer;
use BaconQrCode\Renderer\Image\ImagickImageBackEnd;
use BaconQrCode\Renderer\RendererStyle\RendererStyle;
use BaconQrCode\Writer;
class Webtoons extends Component
{
    public $webtoons, $title, $author, $genre, $description, $cover_image, $status, $rating, $view_count, $qr_code, $webtoon_id;
    public $isOpen = 0;

    public function render()
    {
        $this->webtoons = Webtoon::all();
        return view('livewire.webtoons');
    }

    public function create()
    {
        $this->resetInputFields();
        $this->generateQRCode();
        $this->openModal();
    }

    public function openModal()
    {
        $this->isOpen = true;
    }

    public function closeModal()
    {
        $this->isOpen = false;
    }

    private function resetInputFields()
    {
        $this->title = '';
        $this->author = '';
        $this->genre = '';
        $this->description = '';
        $this->cover_image = '';
        $this->status = '';
        $this->rating = '';
        $this->view_count = '';
        $this->qr_code = '';
        $this->webtoon_id = '';
    }

    public function store()
    {
        $this->validate([
            'title' => 'required',
            'author' => 'required',
            'genre' => 'required',
            'description' => 'required',
            'status' => 'required',
            'rating' => 'required',
            'view_count' => 'required',
        ]);

        Webtoon::updateOrCreate(['id' => $this->webtoon_id], [
        
            'title' => $this->title,
            'author' => $this->author,
            'genre' => $this->genre,
            'description' => $this->description,
            'cover_image' => $this->cover_image,
            'status' => $this->status,
            'rating' => $this->rating,
            'view_count' => $this->view_count,
            'qr_code' => $this->qr_code,
            
        ]);

        session()->flash('message',
            $this->webtoon_id ? 'Webtoon Updated Successfully.' : 'Webtoon Created Successfully.');
            
        $this->closeModal();

        $this->resetInputFields();
    }

    public function edit($id)
    {
        $webtoon = Webtoon::findOrFail($id);
        $this->webtoon_id = $id;
        $this->title = $webtoon->title;
        $this->author = $webtoon->author;
        $this->genre = $webtoon->genre;
        $this->description = $webtoon->description;
        $this->cover_image = $webtoon->cover_image;
        $this->status = $webtoon->status;
        $this->rating = $webtoon->rating;
        $this->view_count = $webtoon->view_count;
        $this->qr_code = $webtoon->qr_code;
        $this->generateQRCode();

        $this->openModal();
    }

    public function delete($id)
    {
        Webtoon::find($id)->delete();
        session()->flash('message', 'Webtoon Deleted Successfully.');
    }
    private function generateQRCode()
    {
        $renderer = new ImageRenderer(
            new RendererStyle(400),
            new ImagickImageBackEnd()
        );

        $id = $this->webtoon_id;
        $qrCodeWriter = new Writer($renderer);
        $this->qr_code = base64_encode($qrCodeWriter->writeString(url("/webtoons/{$id}")));
    }
}
