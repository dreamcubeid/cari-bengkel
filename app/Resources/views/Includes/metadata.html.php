
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

		<?php 
			if ($this->metaTitle) {
				$this->headTitle($this->metaTitle);
			} else if ($this->document instanceof \Pimcore\Model\Document\Page) {
				$this->headTitle($this->document->getTitle());
			}

			if ($this->metaDescription) {
				$this->headMeta()->appendName('description', $this->metaDescription);
			} else if ($this->document instanceof \Pimcore\Model\Document\Page) {
				$this->headMeta()->appendName('description', $this->document->getDescription());
			}

			if ($this->metaKeyword) {
				$this->headMeta()->appendName('keywords', $this->metaKeyword);
			}

			echo $this->headTitle();
			echo $this->headMeta();
		?>