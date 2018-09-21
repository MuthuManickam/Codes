package module_config;
 
import java.io.File;
 
import org.apache.commons.io.FileUtils;
import org.openqa.selenium.OutputType;
import org.openqa.selenium.TakesScreenshot;
 
import config.ActionKeywords;
 
public class ScreenShot {
 
    public void takeSnapShot(String imgPath) throws Exception{
 
        TakesScreenshot scrShot =((TakesScreenshot)ActionKeywords.event);
        File SrcFile=scrShot.getScreenshotAs(OutputType.FILE);
        File DestFile=new File(imgPath);
//        File DestFile=new File("/home/bustooluser/Linktest/Error.png");
        FileUtils.copyFile(SrcFile, DestFile);
    }
}
 