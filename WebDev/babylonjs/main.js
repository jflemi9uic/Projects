window.addEventListener('DOMContentLoaded', function () {
    var canvas = document.getElementById('canvas');
    var engine = new BABYLON.Engine(canvas, true);

    var createScene = function () {
        var scene = new BABYLON.Scene(engine);
        scene.clearColor = new BABYLON.Color3.White();

        var box = BABYLON.Mesh.CreateBox("Box", 4.0, scene);
        // var box2 = BABYLON.Mesh.CreateBox("Box2", 4.0, scene);

        var material = new BABYLON.StandardMaterial("material1", scene);
        material.wireframe = true;

        // box2.material = material;
        // box2.position = new BABYLON.Vector3(0,4,0);

        // Arc Rotate Camera
        var camera = new BABYLON.ArcRotateCamera("arcCamera", 
                                                 BABYLON.Tools.ToRadians(45), 
                                                 BABYLON.Tools.ToRadians(45), 
                                                 20.0, box.position, scene)
        
        camera.setTarget(BABYLON.Vector3.Zero());
        camera.attachControl(canvas, true);
        
        return scene;
    }

    var scene = createScene();
    engine.runRenderLoop(function () {
        scene.render();
    });
});