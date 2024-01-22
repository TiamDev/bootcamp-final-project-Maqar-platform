<?php

namespace App\ViewModels;

use App\Models\File\file;
use App\Models\maqar\workspace;
use App\Models\maqar\workspaceOffer;

class workspaceImage

{
  public string $image;
  public workspace $workspace;
  public workspaceOffer $workspaceoffer;



  public function save($workspace, $image, $workspaceoffer = null)
  {
    $this->image = $image;
    $this->workspace = $workspace;

    if ($workspaceoffer !== null) {
      $this->workspaceoffer = $workspaceoffer;
    }
  }
}
