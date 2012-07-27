<?php

if (!defined('e107_INIT')) { exit; }

echo "<style>
progress, progress[role] {
	appearance: none;
	-moz-appearance: none;
	-webkit-appearance: none;
	border: 1px solid #".$pref['anteup_border'].";
	height: ".$pref['anteup_height']."
}
progress[role] strong {
	display: none;
}
progress, progress[role][aria-valuenow] {
   background: #".$pref['anteup_empty']." !important;
}
progress::-webkit-progress-bar {
    background: #".$pref['anteup_empty'].";
}
progress {
    color: #".$pref['anteup_full'].";
}
progress::-moz-progress-bar {
    background: #".$pref['anteup_full'].";
}
progress::-webkit-progress-value {
    background: #".$pref['anteup_full'].";
}
progress[aria-valuenow]:before  {
    background: #".$pref['anteup_full'].";
}
</style>";

?>