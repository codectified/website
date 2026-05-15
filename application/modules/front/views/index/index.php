<?php 
    $primaryCollections = array_filter($collections, function($c) { return $c['type'] === 'primary_collection'; });
    $secondaryCollections = array_filter($collections, function($c) { return $c['type'] === 'secondary_collection'; });
    $selectionCollections = array_filter($collections, function($c) { return $c['type'] === 'selection'; });
    $primaryCollections = array_values($primaryCollections);
    $secondaryCollections = array_values($secondaryCollections);
    $selectionCollections = array_values($selectionCollections);
    $primarySplit = round(count($primaryCollections) / 2, 0, PHP_ROUND_HALF_UP);
    $secondarySplit = round(count($secondaryCollections) / 2, 0, PHP_ROUND_HALF_UP);
    $selectionSplit = round(count($selectionCollections) / 2, 0, PHP_ROUND_HALF_UP);
?>

	<div class="donation-banner-container">
		<div class="donation-banner">
			<p>Support Sunnah.com</p>
			<a href="/donate" class="donate-btn">Donate</a>
		</div>
	</div>

	<div align=center id="indextag">
		The Hadith of the Prophet Muhammad (صلى الله عليه و سلم) at your fingertips
	</div>

	<div class="indexsearchcontainer">
	<div id="indexsearch">
 	 	<form name="searchform" action="/search/" method=get id="searchform">
       		<input type="text" class="indexsearchquery" name=q placeholder="Search &#8230;" value="" />
                <input type="submit" class="indexsearchsubmit" value="l" />
                <input type="hidden" name="mode" id="indexSemanticMode" value="semantic" disabled />
		</form>
	</div>
	<div id="indexSemanticToggle" class="index-semantic-toggle" role="switch" aria-checked="false"
	     tabindex="0" title="Semantic search — find hadith by meaning, not just matching keywords">
		<i class="fa-solid fa-flask semantic-icn"></i>
		<span class="semantic-text">
			<span class="semantic-label">Semantic search</span>
			<span class="semantic-desc">Find hadith by meaning</span>
		</span>
		<span class="semantic-switch"><span class="semantic-knob"></span></span>
	</div>
	<a class="indexsearchtipslink">Search Tips</a>
    <div id="indexsearchtips">
        <b>Quotes</b> e.g. "pledge allegiance"<br>
        Searches for the whole phrase instead of individual words
        <p>
        <b>Wildcards</b> e.g. test*<br>
        Matches any set of one or more characters. For example test* would result in test, tester, testers, etc.
        <p>
        <b>Fuzzy Search</b> e.g. swore~<br>
        Finds terms that are similar in spelling. For example swore~ would result in swore, snore, score, etc.
        <p>
        <b>Term Boosting</b> e.g. pledge^4 hijrah<br>
        Boosts words with higher relevance. Here, the word <i>pledge</i> will have higher weight than <i>hijrah</i>
        <p>
        <b>Boolean Operators</b> e.g. ("pledge allegiance" OR "shelter) AND prayer<br>
        Create complex phrase and word queries by using Boolean logic.
        <p>
        <a href="/searchtips">More ...</a>
    </div>
	<div class=clear></div>
	</div>

	<!-- The Nine Books Section -->
	<div class="collection-section">
		<div class="collection-section-header">
			<span class="collection-section-title">The Nine Books</span>
			<span class="collection-section-title-arabic arabic">الكتب التسعة</span>
		</div>
		<div class="collections">
			<div class="collection_titles" style="padding-right: 6px;">
				<?php 
					for ($i = 0; $i < $primarySplit; $i++) {
						$collection = $primaryCollections[$i];
						?>
						<div class="collection_title">
							<a href="/<?php echo $collection['name']; ?>" style="display: inline;">
								<div class="english_collection_title"><?php echo $collection['englishTitle']; ?></div>
								<div class="arabic arabic_collection_title"><?php echo $collection['arabicTitle']; ?></div>
							</a>
							<div class="clear"></div>
						</div>
						<?php if ($i < $primarySplit - 1) echo '<div class="collection_sep"></div>';
				 } ?>
			</div><!-- end primary collection titles 1 -->
			<div class="collection_titles" style="float: right;">
				<?php 
					for ($i = $primarySplit; $i < count($primaryCollections); $i++) {
						$collection = $primaryCollections[$i];
						?>
						<div class="collection_title">
							<a href="/<?php echo $collection['name']; ?>" style="display: inline;">
								<div class="english_collection_title"><?php echo $collection['englishTitle']; ?></div>
								<div class="arabic arabic_collection_title"><?php echo $collection['arabicTitle']; ?></div>
							</a>
							<div class="clear"></div>
						</div>
						<?php if ($i < count($primaryCollections) - 1) echo '<div class="collection_sep"></div>';
				 } ?>
			</div><!-- end primary collection titles 2 -->
			<div class="clear"></div>
		</div>
	</div><!-- end The Nine Books section -->

	<!-- Other Primary Collections Section -->
	<div class="collection-section">
		<div class="collection-section-header">
			<span class="collection-section-title">Other Primary Collections</span>
			<span class="collection-section-title-arabic arabic">المصادر الأصلية الأخرى</span>
		</div>
		<div class="collections">
			<div class="collection_titles" style="padding-right: 6px;">
				<?php 
					for ($i = 0; $i < $secondarySplit; $i++) {
						$collection = $secondaryCollections[$i];
						?>
						<div class="collection_title">
							<a href="/<?php echo $collection['name']; ?>" style="display: inline;">
								<div class="english_collection_title"><?php echo $collection['englishTitle']; ?></div>
								<div class="arabic arabic_collection_title"><?php echo $collection['arabicTitle']; ?></div>
							</a>
							<div class="clear"></div>
						</div>
						<?php if ($i < $secondarySplit - 1) echo '<div class="collection_sep"></div>';
				 } ?>
			</div><!-- end secondary collection titles 1 -->
			<div class="collection_titles" style="float: right;">
				<?php 
					for ($i = $secondarySplit; $i < count($secondaryCollections); $i++) {
						$collection = $secondaryCollections[$i];
						?>
						<div class="collection_title">
							<a href="/<?php echo $collection['name']; ?>" style="display: inline;">
								<div class="english_collection_title"><?php echo $collection['englishTitle']; ?></div>
								<div class="arabic arabic_collection_title"><?php echo $collection['arabicTitle']; ?></div>
							</a>
							<div class="clear"></div>
						</div>
						<?php if ($i < count($secondaryCollections) - 1) echo '<div class="collection_sep"></div>';
				 } ?>
			</div><!-- end secondary collection titles 2 -->
			<div class="clear"></div>
		</div>
	</div><!-- end Other Primary Collections section -->

	<!-- Selections Section -->
	<div class="collection-section collection-section-selections">
		<div class="collection-section-header">
			<span class="collection-section-title">Selections</span>
			<span class="collection-section-title-arabic arabic">المصادر الثانوية</span>
		</div>
		<div class="collections">
			<div class="collection_titles" style="padding-right: 6px;">
				<?php 
					for ($i = 0; $i < $selectionSplit; $i++) {
						$collection = $selectionCollections[$i];
						?>
						<div class="collection_title">
							<a href="/<?php echo $collection['name']; ?>" style="display: inline;">
								<div class="english_collection_title"><?php echo $collection['englishTitle']; ?></div>
								<div class="arabic arabic_collection_title"><?php echo $collection['arabicTitle']; ?></div>
							</a>
							<div class="clear"></div>
						</div>
						<?php if ($i < $selectionSplit - 1) echo '<div class="collection_sep"></div>';
				 } ?>
			</div><!-- end selection titles 1 -->
			<div class="collection_titles" style="float: right;">
				<?php 
					for ($i = $selectionSplit; $i < count($selectionCollections); $i++) {
						$collection = $selectionCollections[$i];
						?>
						<div class="collection_title">
							<a href="/<?php echo $collection['name']; ?>" style="display: inline;">
								<div class="english_collection_title"><?php echo $collection['englishTitle']; ?></div>
								<div class="arabic arabic_collection_title"><?php echo $collection['arabicTitle']; ?></div>
							</a>
							<div class="clear"></div>
						</div>
						<?php if ($i < count($selectionCollections) - 1) echo '<div class="collection_sep"></div>';
				 } ?>
			</div><!-- end selection titles 2 -->
			<div class="clear"></div>
		</div>
	</div><!-- end Selections section -->

	<br>
	<div align=center style="color: #75A1A1;">Supported languages: English, Arabic, Urdu, Bangla</div>

<style>
	.index-semantic-toggle {
		display: flex;
		align-items: center;
		gap: 10px;
		margin-top: 8px;
		padding: 8px 12px;
		box-sizing: border-box;
		cursor: pointer;
		user-select: none;
		color: var(--primary-text-color);
		border: 1px solid rgba(127, 127, 127, 0.35);
		border-radius: 10px;
	}

	/* Search Tips link sits on its own line beneath the toggle */
	.indexsearchtipslink {
		clear: both;
		margin-top: 6px;
	}

	.index-semantic-toggle .semantic-text {
		display: flex;
		flex-direction: column;
		align-items: flex-start;
		gap: 2px;
		line-height: 1.2;
	}

	.index-semantic-toggle .semantic-label {
		font-size: 13px;
	}

	.index-semantic-toggle .semantic-desc {
		font-size: 12px;
		color: #75A1A1;
	}

	.index-semantic-toggle:focus {
		outline: 2px solid #3ba08f;
		outline-offset: 2px;
	}

	.index-semantic-toggle .semantic-icn {
		color: #75A1A1;
		transition: color 0.2s ease, transform 0.2s ease;
	}

	.index-semantic-toggle .semantic-switch {
		position: relative;
		display: inline-block;
		width: 34px;
		height: 18px;
		border-radius: 999px;
		background-color: rgba(127, 127, 127, 0.45);
		transition: background-color 0.2s ease;
		flex-shrink: 0;
		margin-left: auto;
	}

	.index-semantic-toggle .semantic-knob {
		position: absolute;
		top: 2px;
		left: 2px;
		width: 14px;
		height: 14px;
		border-radius: 50%;
		background-color: #fff;
		box-shadow: 0 1px 2px rgba(0, 0, 0, 0.35);
		transition: transform 0.2s ease;
	}

	.index-semantic-toggle.active .semantic-switch {
		background-color: #3ba08f;
	}

	.index-semantic-toggle.active .semantic-knob {
		transform: translateX(16px);
	}

	.index-semantic-toggle.active .semantic-icn {
		color: #3ba08f;
		transform: rotate(-12deg);
	}
</style>

<script>
	(function () {
		var toggle = document.getElementById("indexSemanticToggle");
		var modeInput = document.getElementById("indexSemanticMode");
		if (!toggle || !modeInput) return;

		function setState(on) {
			toggle.classList.toggle("active", on);
			toggle.setAttribute("aria-checked", on ? "true" : "false");
			// Only submit the mode param when semantic is on; lexical is the default.
			modeInput.disabled = !on;
		}

		toggle.addEventListener("click", function () {
			setState(!toggle.classList.contains("active"));
		});

		toggle.addEventListener("keydown", function (event) {
			if (event.key === " " || event.key === "Enter") {
				event.preventDefault();
				setState(!toggle.classList.contains("active"));
			}
		});
	})();
</script>
