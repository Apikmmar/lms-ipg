<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AnnouncementController extends Controller
{
    public function viewAnnouncementForm() {
        return view('ManageAnnouncement.announcementForm');
    }

    public function createAnnouncement() {
    }
    
    public function editAnnouncement() {
    }

    public function deleteAnnouncement() {
    }
    public function viewAnnouncementApproval() {
        return view('ManageAnnouncement.announcementApproval');
    }
}
